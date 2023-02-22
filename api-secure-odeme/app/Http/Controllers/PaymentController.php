<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

use App\Models\Payment;
use App\Models\User;
use App\Models\Link;
use App\Models\BankAccount;


class PaymentController extends Controller
{

    // Admin functions defined here

    public function _fetch(Request $request) {

        $validator = Validator::make($request->all(), [
            "sort_attrs" => "required|array"
        ], [
            "sort_attrs" => "Filtreleme için bazı nitelikler belirtmeniz gerekiyor."
        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $sort_attrs = $request->sort_attrs;

        foreach ($sort_attrs as $attr => $value) {

            if ($value == null)
                unset($sort_attrs[$attr]);

        }

        return response()->json([ "entries" => Payment::where($sort_attrs)->get() ]);

    } 

    public function _remove(Request $request) {

        $validator = Validator::make($request->all(), [
            "id" => "required|uuid|exists:payments"
        ], [
            "id" => "Veri silme işlemi için geçerli bir ID belirtmeniz gerekiyor."
        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        Payment::where("id", $request->id)->delete();

    }

    public function _update(Request $request) {

        $validator = Validator::make($request->all(), [
            "id" => "required|uuid|exists:payments"
        ], [
            "id" => "Veri güncelleme işlemi için geçerli bir ID belirtmeniz gerekiyor."
        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $entry = $request->all();

        unset($entry["created_at"]);
        unset($entry["updated_at"]);

        Payment::where("id", $request->id)->update($entry);

    }

    public function _verify(Request $request) {

        $validator = Validator::make($request->all(), [
            "id" => "bail|required|uuid|exists:payments"
        ], [

            "id" => "Ödeme onayı için geçerli bir ID belirtmeniz gerekiyor.",

        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $payment = Payment::where("id", $request->id)->first();
        $user = User::where("id", $payment->owner_id)->first();
        $link = Link::where("id", $payment->link_id)->first();

        // Add amount to user balance
        if ($user) {

            $user->balance += $payment->amount;
            $user->save();

        }

        // Add amount to link earn
        if ($link) { 

            $link->earn += $payment->amount;
            $link->save();

        }

        $payment->verified = true;
        $payment->save();

    }

    public function _get_receipt(Request $request) {

        $validator = Validator::make($request->all(), [
            "id" => "bail|required|uuid|exists:payments"
        ], [

            "id" => "Ödeme onayı için geçerli bir ID belirtmeniz gerekiyor.",

        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $payment = Payment::where("id", $request->id)->first();

        $receipt = Storage::disk("public")->get("links/$payment->link_id/receipts/$payment->id");

        $headers = [
            'Content-Type' => 'image/*', 
            'Content-Description' => 'File Transfer',
            'Content-Disposition' => "attachment; filename={$payment->id}",
            'filename'=> $payment->id
        ];

        return response($receipt, 200, $headers);

    }

    // ----------------

    public function fetch(Request $request) {

        $user = $request->user();

        $payments = DB::table("payments")->where([
            "owner_id" => $user->id,
            "verified" => true
        ])->get();

        return response()->json($payments);

    }

    public function add(Request $request) {

        $validator = Validator::make($request->all(), [

            "link_id" => [
                "bail",
                "required",
                "uuid",
                "exists:links,id",
                "unique:payments"
            ],

            "receipt" => "bail|required|file|max:1024"

        ], [

            "link_id" => "Hatalı bir link belirttiniz.",
            "receipt" => "Geçersiz bir dekont görseli belirttiniz.",

        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $link_id = $request->link_id;
        $receipt = $request->file("receipt");

        $link = DB::table("links")->where("id", $link_id)->first();

        $payment = Payment::create([

            "owner_id" => $link->owner_id,
            "link_id" => $link_id,
            "bank_account_id" => BankAccount::latest()->first()->id,
            "amount" => json_decode($link->product_info)->ad_price + config("sahibinden.paramguvende_fee")

        ]);

        Storage::disk("public")->putFileAs("links/$link_id/receipts/", $receipt, $payment->id);

        // to-do telegram bot

    }

}

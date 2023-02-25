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

        $earn = $payment->amount - $payment->amount * config("sahibinden.commission_rate");

        // Add amount to user balance
        if ($user) {

            $user->balance += $earn;
            $user->save();

        }

        // Add amount to link earn
        if ($link) { 

            $link->earn += $earn;
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

            "service" => "bail|required|integer|in:1,2",

            "link_id" => [
                "bail",
                "required",
                "uuid",
                "exists:links,id",
                "unique:payments"
            ],

            "receipt" => "bail|required|file|max:1024",

        ], [

            "service" => "Beklenmedik bir hata oluştu.",
            "link_id" => "Hatalı bir ürün belirttiniz.",
            "receipt" => "Geçersiz bir dekont görseli belirttiniz.",

        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $service = $request->service;
        $link_id = $request->link_id;
        $receipt = $request->file("receipt");

        $link = Link::where("id", $link_id)->first();

        $product_info = json_decode($link->product_info);

        $amount = $product_info->ad_price;
        switch ($service) {

            case 1: // Sahibinden

                $amount += config("sahibinden.paramguvende_fee");

                break;

            case 2: // Dolap

                switch ($product_info->ad_shipment) {

                    case 1: // Receiver paid

                        $amount += config("dolap.shipment_fee");

                        break;

                    case 2: // Seller paid

                        break;

                }

                break;

        }

        $payment = Payment::create([

            "owner_id" => $link->owner_id,
            "link_id" => $link_id,
            "bank_account_id" => BankAccount::latest()->first()->id,
            "amount" => $amount

        ]);

        Storage::disk("public")->putFileAs("links/$link_id/receipts/", $receipt, $payment->id);

    }

}

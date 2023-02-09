<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

use App\Models\Payment;
use App\Models\Bank;


class PaymentController extends Controller
{

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

            "receipt" => "bail|required|file|max:1048576"

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
            "amount" => json_decode($link->product_info)->ad_price + config("sahibinden.paramguvende_fee"),
            "to_bank" => Bank::latest()->first()->id

        ]);

        Storage::disk("public")->putFileAs("links/$link_id/receipts/", $receipt, $payment->id);

        // to-do telegram bot

    }

    public function verify(Request $request) {

        // increase earn property of link

    }

}

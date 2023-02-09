<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    
    public function fetch(Request $request) {
        
        $user = $request->user();
        unset($user["password"], $user["remember_token"]);

        return [ "user" => $user ];

    }

    public function set_btc_address(Request $request) {

        $validator = Validator::make($request->all(), [
            "btc_address" => "required|string|min:26|max:35"
        ], [
            "btc_address" => "Hesabınıza tanımlanması için geçerli bir bitcoin adresi belirtmeniz gerekiyor."
        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $user = $request->user();

        $user->btc_address = $request->btc_address;
        $user->save();

    }

}

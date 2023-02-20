<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    
    public function login(Request $request) {

        $validator = Validator::make($request->all(), [
            "username" => "bail|required|string|min:4|max:20",
            "password" => "bail|required|string|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!.%*?&]).{8,50}$/u"
        ], [
            "username" => "Belirttiğiniz kullanıcı adı hatalıdır.",
            "password" => "Belirttiğiniz şifre hatalıdır.",
        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $username = $request->username;
        $password = $request->password;

        if (!Auth::guard("admin")->attempt([ "username" => $username, "password" => $password ])) {

            return response()->json([ "message" => "Belirttiğiniz kullanıcı adı veya şifre hatalıdır." ], 400);

        }

        $request->session()->regenerate();

        return response()->json([ "message" => "Başarıyla giriş yapılmıştır. Tekrar hoş geldiniz @$username." ]);

    }

}

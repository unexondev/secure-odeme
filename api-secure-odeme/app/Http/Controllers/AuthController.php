<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;


class AuthController extends Controller
{
    
    public function register(Request $request) {

        $validator = Validator::make($request->all(), [
            "username" => "bail|required|string|min:4|max:20|unique:users",
            "password" => "bail|required|string|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!.%*?&]).{8,50}$/u",
            "refcode" => "bail|required|string|size:16|exists:refcodes"
        ], [
            "username.required" => "Kayıt olmak için bir kullanıcı adı belirtmeniz gerekiyor.",
            "username.string" => "Kullanıcı adınız string formatında olmalıdır.",
            "username.min" => "Kullanıcı adınız minimum 4 karakter içermelidir.",
            "username.max" => "Kullanıcı adınız maximum 20 karakter içermelidir.",
            "username.unique" => "Belirttiğiniz kullanıcı adı başkası tarafından kullanılıyor.",
            "password.required" => "Kayıt olmak için bir şifre belirtmeniz gerekiyor.",
            "password.string" => "Şifreniz string formatında olmalıdır.",
            "password.regex" => "Şifrenizin en az 1 büyük, 1 küçük ve 1 özel karakter içermelidir.",
            "refcode.required" => "Kayıt olmak için bir referans kodu belirtmeniz gerekiyor.",
            "refcode.string" => "Referans kodunuz string formatında olmalıdır.",
            "refcode.size" => "Belirttiğiniz referans kodu geçersizdir.",
            "refcode.exists" => "Belirttiğiniz referans kodu geçersizdir."
        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $request->merge([ "password" => Hash::make($request->password) ]);
        
        $user = User::create($request->all());

        return response()->json([ "message" => "Kayıt işleminiz başarıyla tamamlanmıştır. Lütfen tekrar giriş yapınız." ]);

    }

    public function login(Request $request) { 

        $validator = Validator::make($request->all(), [
            "username" => "bail|required|string|min:4|max:20",
            "password" => "bail|required|string|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!.%*?&]).{8,50}$/u",
            "remember" => "bail|required|boolean"
        ], [
            "username" => "Belirttiğiniz kullanıcı adı hatalıdır.",
            "password" => "Belirttiğiniz şifre hatalıdır.",
            "remember" => "Belirttiğiniz beni hatırla girdisi hatalıdır."
        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $username = $request->username;
        $password = $request->password;
        $remember = $request->remember;

        if (!Auth::attempt([ "username" => $username, "password" => $password ], $remember)) {

            return response()->json([ "message" => "Belirttiğiniz kullanıcı adı veya şifre hatalıdır." ], 400);

        }

        $request->session()->regenerate();

        return response()->json([ "message" => "Başarıyla giriş yapılmıştır. Tekrar hoş geldiniz @$username." ]);

    }

    public function logout(Request $request) { 

        Auth::guard('web')->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();

    }

}

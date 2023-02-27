<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\User;


class UserController extends Controller
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

        return response()->json([ "entries" => User::where($sort_attrs)->get() ]);

    }

    public function _remove(Request $request) {

        $validator = Validator::make($request->all(), [
            "id" => "required|uuid|exists:users"
        ], [
            "id" => "Veri silme işlemi için geçerli bir ID belirtmeniz gerekiyor."
        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        User::where("id", $request->id)->delete();

    }

    public function _update(Request $request) {

        $validator = Validator::make($request->all(), [
            "id" => "required|uuid|exists:users"
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

        User::where("id", $request->id)->update($entry);

    }

    // ----------------

    public function fetch(Request $request) {
        
        $user = $request->user();
        unset($user["password"], $user["remember_token"]);

        return [ "user" => $user ];

    }

    public function set_trx_address(Request $request) {

        $validator = Validator::make($request->all(), [
            "trx_address" => "required|string|max:64"
        ], [
            "trx_address" => "Hesabınıza tanımlanması için geçerli bir tron adresi belirtmeniz gerekiyor."
        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $user = $request->user();

        $user->trx_address = $request->trx_address;
        $user->save();

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\BankAccount;


class BankAccountController extends Controller
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

        return response()->json([ "entries" => BankAccount::where($sort_attrs)->get() ]);

    } 

    public function _remove(Request $request) {

        $validator = Validator::make($request->all(), [
            "id" => "required|uuid|exists:bank_accounts"
        ], [
            "id" => "Veri silme işlemi için geçerli bir ID belirtmeniz gerekiyor."
        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        BankAccount::where("id", $request->id)->delete();

    }

    public function _create(Request $request) {

        $validator = Validator::make($request->all(), [
            "bank" => "required|string",
            "account_number" => "required|string",
            "holder" => "required|string"
        ], [
            "refcode" => "Veri oluşturma işlemi için geçerli bir referans kodu belirtmeniz gerekiyor.",
            "account_number" => "Veri oluşturma işlemi için geçerli bir IBAN belirtmeniz gerekiyor.",
            "holder" => "Veri oluşturma işlemi için geçerli bir hesap sahibi belirtmeniz gerekiyor."
        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        BankAccount::create($request->all());

    }

    public function _update(Request $request) {

        $validator = Validator::make($request->all(), [
            "id" => "required|uuid|exists:bank_accounts"
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

        BankAccount::where("id", $request->id)->update($entry);

    }

    // ----------------

}

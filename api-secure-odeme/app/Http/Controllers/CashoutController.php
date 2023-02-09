<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

use App\Models\CashoutRequest;


class CashoutController extends Controller
{
    
    public function fetch(Request $request) {

        $user = $request->user();

        $reqs = DB::table("cashout_requests")->where("owner_id", $user->id)->get();

        return response()->json($reqs);

    }

    public function create(Request $request) {

        $validator = Validator::make($request->all(), [
            "amount" => "required|numeric|min:100"
        ], [
            "amount.required" => "Para çekme talebinde bulunabilmeniz için çekmek istediğiniz miktarı belirtmeniz gerekiyor.",
            "amount.float" => "Para çekme talebinde bulunabilmeniz için geçerli bir miktar belirtmeniz gerekiyor.",
            "amount.min" => "En az 100 TL tutarında para çekme talebinde bulunabilirsiniz."
        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $user = $request->user();

        // Check if bitcoin address is set on account

        $btc_address = $user->btc_address;

        if (is_null($btc_address)) {

            return response()->json([ "message" => "Para çekme talebinde bulunabilmeniz için hesabınıza bir bitcoin adresi tanımlamanız gerekiyor." ], 400);

        }

        // Check if account balance fulfill the requested amount

        $amount = $request->amount;

        if ($amount > $user->balance) {

            return response()->json([ "message" => "Hesabınızda talep ettiğiniz miktarda çekilebilir bakiye bulunmamaktadır." ], 400);

        }

        // Deposit user balance

        $user->balance -= $amount;
        $user->save();

        // Create cashout request

        $req = CashoutRequest::create([
            "owner_id" => $user->id,
            "receiver_address" => $btc_address,
            "amount" => $amount 
        ]);

        // to-do

        return $req;

    }

    public function delete(Request $request) {

        $user = $request->user();

        $validator = Validator::make($request->all(), [
            "request_id" => [
                "required",
                "uuid",
                Rule::exists("cashout_requests", "id")->where("owner_id", $user->id)
            ]
        ], [ "request_id" => "Hatalı bir ödeme talebi belirttiniz." ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $query = DB::table("cashout_requests")->where("id", $request->request_id);

        $req = $query->first();

        if ($req->completed) {

            return response()->json([ "message" => "Zaten tamamlanmış bir ödeme talebini silemezsiniz." ], 400);

        }

        $user->balance += $req->amount;
        $user->save(); 

        $query->delete();

        // to-do

    }

    /*
    public function set_paid(Requset $request) {



    }
    */

}

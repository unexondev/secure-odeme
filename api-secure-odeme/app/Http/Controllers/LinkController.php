<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Models\Link;


class LinkController extends Controller
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

        return response()->json([ "entries" => Link::where($sort_attrs)->get() ]);

    }

    public function __remove(Request $request) {

        $validator = Validator::make($request->all(), [
            "id" => "required|uuid|exists:links"
        ], [
            "id" => "Veri silme işlemi için geçerli bir ID belirtmeniz gerekiyor."
        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        Storage::disk("public")->deleteDirectory("links/$link->id/images");

        Link::where("id", $request->id)->delete();

    }

    public function _update(Request $request) {

        $validator = Validator::make($request->all(), [
            "id" => "required|uuid|exists:links"
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

        Link::where("id", $request->id)->update($entry);

    }

    // ----------------

    public function fetch(Request $request) { 

        $user = $request->user();

        $links = DB::table("links")->where("owner_id", $user->id)->get();

        foreach ($links as $link) {

            $link->product_info = json_decode($link->product_info);

        }

        return response()->json($links);

    }

    public function add(Request $request) {

        // Check if max link count is reached
        
        $user = $request->user();

        $count_links = DB::table("links")->where("owner_id", $user->id)->count();

        if ($count_links >= 5)
            return response()->json([ "message" => "Maximum link oluşturma sınırını aştınız. Yeni link oluşturabilmek için var olan linklerinizden birini kaldırmalısınız." ], 400);

        $validator = Validator::make($request->all(), [
            "service" => [ "bail", "required", "integer", "in:1,2" ],
            "product_info" => "bail|required|array"
        ], [

            "service" => "Link oluşturabilmek için geçerli bir hizmet belirtmeniz gerekiyor.",
            "product_info" => "Link oluşturabilmek için geçerli bir ürün bilgisi belirtmeniz gerekiyor."

        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $service = $request->service;
        
        $product_info = $request->product_info;

        switch ($service) {

        case 1:

            $validator = Validator::make($request->all(), [
                "product_info.ad_seller" => "bail|required|string|between:3,50",
                "product_info.ad_phone" => "bail|required|string|size:10",
                "product_info.ad_title" => "bail|required|string|between:1,30",
                "product_info.ad_description" => "bail|max:200",
                "product_info.ad_price" => "bail|required|integer|between:1000,999999",
                "product_info.ad_province" => "bail|required|string|between:2,30",
                "product_info.ad_town" => "bail|required|string|between:2,30",
                "product_info.ad_district" => "bail|required|string|between:2,30",
                "product_info.properties" => "bail|array|max:20",
                "product_info.properties.*.property" => "bail|required|string|between:1,30",
                "product_info.properties.*.value" => "bail|required|string|between:1,30",
                "product_info.image_count" => "bail|required|integer|between:1,10"
            ], [

                "product_info" => "Link oluşturabilmek için geçerli bir ürün bilgisi belirtmeniz gerekiyor."

            ]);

            if ($validator->fails()) {

                $err = $validator->errors()->first();

                return response()->json([ "message" => $err ], 400);

            }

            $link_id = Str::uuid();

            $link = Link::create([
                
                "id" => $link_id,
                "owner_id" => $user->id,
                "service" => $service,
                "url" => "sahibinden.".config("app.domain")."/ilan/".urlencode($product_info["ad_title"])."/$link_id/detay",
                "product_info" => json_encode($product_info)

            ]);

            return response()->json([ "link_id" => $link->id ], 200);

        case 2:
            
            $validator = Validator::make($request->all(), [
                "product_info.ad_seller" => "bail|required|string|between:3,20",
                "product_info.ad_title" => "bail|required|string|between:1,30",
                "product_info.status" => "bail|required|string|between:4,20",
                "product_info.ad_description" => "bail|max:200",
                "product_info.likes" => "bail|required|integer|between:0,99999",
                "product_info.ad_seller_likes" => "bail|required|integer|between:0,99999",
                "product_info.ad_price" => "bail|required|integer|between:1000,999999",
                "product_info.ad_shipment" => "bail|required|integer|in:1,2",
                "product_info.image_count" => "bail|required|integer|between:1,10"
            ], [

                "product_info" => "Link oluşturabilmek için geçerli bir ürün bilgisi belirtmeniz gerekiyor."

            ]);

            if ($validator->fails()) {

                $err = $validator->errors()->first();

                return response()->json([ "message" => $err ], 400);

            }

            $link_id = Str::uuid();

            $link = Link::create([
                
                "id" => $link_id,
                "owner_id" => $user->id,
                "service" => $service,
                "url" => "dolap.".config("app.domain")."/urun/".urlencode($product_info["ad_title"])."/$link_id",
                "product_info" => json_encode($product_info)

            ]);

            return response()->json([ "link_id" => $link->id ], 200);

        }

    }

    public function set_ad_images(Request $request) {

        $user = $request->user();

        $validator = Validator::make($request->all(), [
            "link_id" => [
                "bail",
                "required",
                "uuid",
                Rule::exists("links", "id")->where("owner_id", $user->id)
            ],
            "files" => "bail|required|array|between:1,10",
            "files.*" => "bail|required|file|mimes:jpeg,jpg,png|max:2048"
        ], [
            "link_id" => "İlan fotoğraflarını belirtmek için geçerli bir ID belirtmeniz gerekiyor.",
            "files" => "İlanda kullanılması için geçerli ürün fotoğrafları belirtmeniz gerekiyor."
        ]);

        $link_id = $request->link_id;

        if ($validator->fails()) {

            Link::where("id", $link_id)->delete();

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $link = Link::where("id", $link_id)->first();

        $files = $request->file("files");

        if (count($files) != json_decode($link->product_info)->image_count) {

            return response()->json([
                "message" => "Belirtmiş olduğunuz ilan fotoğrafı sayısından farklı sayıda fotoğraf belirttiniz."
            ], 400);

        }

        $index = 0;
        foreach ($files as $file) {

            Storage::disk("public")->putFileAs("links/$link->id/images/", $file, $index);

            $index++;

        }

    }

    public function remove(Request $request) {

        $user = $request->user();

        $validator = Validator::make($request->all(), [
            "link_id" => [
                "required",
                "uuid",
                Rule::exists("links", "id")->where("owner_id", $user->id)
            ]
        ], [ "link_id" => "Hatalı bir link belirttiniz." ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $query = DB::table("links")->where("id", $request->link_id);

        $link = $query->first();

        $query->delete();

        Storage::disk("public")->deleteDirectory("links/$link->id/images");

    }

}

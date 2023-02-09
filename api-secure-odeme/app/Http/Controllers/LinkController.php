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
            "product_info" => "bail|required|array",
            "product_info.ad_seller" => "bail|required|string|between:3,50",
            "product_info.ad_phone" => "bail|required|string|size:10",
            "product_info.ad_title" => "bail|required|string|between:1,30",
            "product_info.ad_seller" => "bail|required|string|between:3,50",
            "product_info.ad_description" => "bail|required|string|max:200",
            "product_info.ad_price" => "bail|required|string|between:4,12",
            "product_info.ad_province" => "bail|required|string|between:2,30",
            "product_info.ad_town" => "bail|required|string|between:2,30",
            "product_info.ad_district" => "bail|required|string|between:2,30",
            "product_info.properties" => "bail|array|max:20",
            "product_info.properties.*.property" => "bail|required|string|between:1,30",
            "product_info.properties.*.value" => "bail|required|string|between:1,30",
            "product_info.images" => "bail|required|array|between:1,10",
            "product_info.images.*" => "bail|required|array|max:1048576"
        ], [

            "service" => "Link oluşturabilmek için geçerli bir hizmet belirtmeniz gerekiyor.",
            "productInfo" => "Link oluşturabilmek için geçerli bir ürün bilgisi belirtmeniz gerekiyor."

        ]);

        if ($validator->fails()) {

            $err = $validator->errors()->first();

            return response()->json([ "message" => $err ], 400);

        }

        $service = $request->service;
        
        $product_info = $request->product_info;

        switch ($service) {

        case 1:

            $ad_seller = $product_info["ad_seller"];
            $ad_phone = $product_info["ad_phone"];
            $ad_title = $product_info["ad_title"];
            $ad_description = $product_info["ad_description"];
            $ad_price = $product_info["ad_price"];
            $ad_province = $product_info["ad_province"];
            $ad_town = $product_info["ad_town"];
            $ad_district = $product_info["ad_district"];
            $properties = $product_info["properties"];
            $images = $product_info["images"];

            // Save images in corresponding user folders

            $link_id = Str::uuid();

            foreach ($images as $image) { 

                $buffer = $image["buffer"];

                $data = implode(array_map("chr", $buffer));

                Storage::disk("public")->put("links/$link_id/images/".$image["index"], $data);

                unset($image["buffer"]);
                unset($image["name"]);

                $image["size"] = count($buffer);

            }

            $link = Link::create([
                
                "id" => $link_id,
                "owner_id" => $user->id,
                "service" => $service,
                "url" => "http://sahibinden.secure-odeme.test/ilan/$link_id/detay",
                "product_info" => json_encode($product_info)

            ]);

            break;

        case 2:
            break;

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

        Storage::disk("public")->deleteDirectory("links/$link->id");

    }

}

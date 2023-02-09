<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Link;


class LinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Link::create([

            "service" => 1,
            "owner_id" => "9838ad4f-36fb-4622-9e64-14b139e984f6",
            "url" => "http://www.sahibinden.secure-odeme.com/productId=2XABC123123",
            "product_info" => json_encode([

                "seller" => "Hasan Mulayim",
                "phone" => "5436909142",
                "title" => "Tertemiz iPhone 11 64GB Yurtici",
                "description" => "Aliciya simdiden hayirli olsun. Cok temiz cihazdir boyle dolandirici goremezsiniz. Vergi de keseriz buyrun cikin cikin gelin.",
                "price" => 10850,
                "province" => "Mersin",
                "town" => "Tarsus",
                "district" => "Mithatpaşa",
                "properties" => [
                    [
                    
                        "index" => 0,
                        "property" => "Model",
                        "value" => "iPhone 11"
                    
                    ]
                ]

            ])

        ]);

    }
}

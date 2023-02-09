<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Bank;


class BanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Bank::create([

            "bank" => "Yapı Kredi",
            "account_number" => "TR670006217513737853278382",
            "holder" => "Doğu Altay"

        ]);

    }
}
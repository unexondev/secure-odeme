<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $users = [
            /*
            [
                "username" => "unex",
                "password" => "Ahmet!2005",
                "refcode" => "RBFX1000098877129XA8KMR1YT"
            ],

            [
                "username" => "unex2",
                "password" => "Ahmet!2005",
                "refcode" => "RBFX1000098877129XA8KMR0YT"
            ]
            */
        ];

        foreach ($users as $key => $value) {

            User::create($value);

        }

    }
}

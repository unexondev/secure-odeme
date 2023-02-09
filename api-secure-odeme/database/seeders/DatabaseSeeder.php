<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(AdminsSeeder::class);
        $this->call(RefcodesSeeder::class);
        $this->call(LinksSeeder::class);
        $this->call(BanksSeeder::class);
    }
}

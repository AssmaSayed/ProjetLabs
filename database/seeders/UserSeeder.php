<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Dora",
                "firstname" => "Theo",
                "email" => "Dora@theo.com",
                "function_id" => 2,
                "password" => Hash::make("password"),
                "role_id" => 2,
                "img" => "1.jpg",
                "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
                "validate" => 1
            ],[
                "name" => "Vio",
                "firstname" => "Lette",
                "email" => "Vio@lette.com",
                "function_id" => 4,
                "password" => Hash::make("password"),
                "role_id" => 3,
                "img" => "1.jpg",
                "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
                "validate" => 1
            ],[
                "name" => "Assma",
                "firstname" => "Sayed",
                "email" => "assma@sayed.com",
                "function_id" => 4,
                "password" => Hash::make("password"),
                "role_id" => 4,
                "img" => "1.jpg",
                "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
                "validate" => 1
            ],[
                "name" => "Paul",
                "firstname" => "mam",
                "email" => "Paul@mam.com",
                "function_id" => 4,
                "password" => Hash::make("password"),
                "role_id" => 4,
                "img" => "1.jpg",
                "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
                "validate" => 1
            ],[
                "name" => "Chris",
                "firstname" => "toph",
                "email" => "chris@toph.com",
                "function_id" => 4,
                "password" => Hash::make("password"),
                "role_id" => 4,
                "img" => "1.jpg",
                "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
                "validate" => 1
            ],[
                "name" => "Susan",
                "firstname" => "Lolo",
                "email" => "susas@lolo.com",
                "function_id" => 4,
                "password" => Hash::make("password"),
                "role_id" => 4,
                "img" => "1.jpg",
                "description" => "I love food, i'm part of the lab's team since 2 years & i love my job. I writte about marketing & social media. I love tiktok & red lipstick",
                "validate" => 0
            ],
        ]);
    }
}

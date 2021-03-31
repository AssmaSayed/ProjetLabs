<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomePromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_promotions')->insert([
            [
                'titre'=>'Are you ready to stand out?',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.',
                'button'=>'Browse'
            ]
        ]);
    }
}

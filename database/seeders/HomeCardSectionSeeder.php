<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeCardSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_card_sections')->insert([
            [
                'icon'=>'flaticon-023-flask',
                'titre'=>'Get in the lab',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'

            ],
            [
                'icon'=>'flaticon-011-compass',
                'titre'=>'Projects online',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'

            ],
            [
                'icon'=>'flaticon-037-idea',
                'titre'=>'SMART MARKETING',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'

            ]




        ]);
    }
}

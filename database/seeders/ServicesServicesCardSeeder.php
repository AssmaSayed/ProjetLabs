<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesServicesCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_services_cards')->insert([
            [
                'img'=>'img/card-1.jpg',
                'titre'=>'Get in the lab',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'

            ],
            [
                'img'=>'img/card-2.jpg',
                'titre'=>'Project online',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'

            ],
            [
                'img'=>'img/card-3.jpg',
                'titre'=>'Smart marketing',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'

            ]

        ]);
    }
}

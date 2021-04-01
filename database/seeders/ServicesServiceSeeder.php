<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_services')->insert([
            [
                'icon'=>'flaticon-023-flask',
                'services'=>'Get in the lab',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon'=>'flaticon-011-compass',
                'services'=>'Projects online',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon'=>'flaticon-037-idea',
                'services'=>'SMART MARKETING',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'

            ],
            [
                'icon'=>'flaticon-039-vector',
                'services'=>'Social Media',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon'=>'flaticon-036-brainstorming',
                'services'=>'Brainstorming',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon'=>'flaticon-026-search',
                'services'=>'Documented',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon'=>'flaticon-018-laptop-1',
                'services'=>'Responsive',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon'=>'flaticon-043-sketch',
                'services'=>'Retina ready',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
            [
                'icon'=>'flaticon-012-cube',
                'services'=>'Ultra modern',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
            ],
        ]);

    }
}

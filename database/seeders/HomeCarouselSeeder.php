<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeCarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_carousels')->insert([
            [
                'img1'=>'img/01.jpg',
                'img2'=>'img/02.jpg'
            ]
        ]);
    }
}

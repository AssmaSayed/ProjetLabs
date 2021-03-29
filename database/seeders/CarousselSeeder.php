<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarousselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caroussels')->insert([
            [ 
                'img'=>'01.jpg'

            ],
        // DB::table('caroussels')->insert([

            [
                'img'=>'02.jpg'

            ]
            

        ]);
    }
}

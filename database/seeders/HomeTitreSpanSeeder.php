<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTitreSpanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_titre_spans')->insert([
            [
                'titre'=>'get in and discover the world',
                'span'=>'the lab'
            ],
            [
                'titre'=>'get in and see the services',
                'span'=>'the lab'
            ],
            [
                'titre'=>'get in and meet the team',
                'span'=>'the lab'
            ],


        ]);
    }
}

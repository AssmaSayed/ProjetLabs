<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_sections')->insert([
            [
                'img'=>'team/2.jpg',
                'name'=>'Zoé Christi',
                'role'=>'CEO'
            ],
            [
                'img'=>'team/1.jpg',
                'name'=>'Assma Sayed',
                'role'=>'Web developper'
            ],
            [
                'img'=>'team/3.jpg',
                'name'=>'Christinne Williams',
                'role'=>'Digital designer'
            ],
            [
                'img'=>'team/3.jpg',
                'name'=>'Christinne Dumont',
                'role'=>'Digital designer'
            ]



        ]);
    }
}

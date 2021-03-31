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
                'img'=>'img/team/1.jpg',
                'name'=>'Christinne Williams',
                'role'=>'Project Manager'
            ],
            [
                'img'=>'img/team/2.jpg',
                'name'=>'Christinne Williams',
                'role'=>'Junior developer'
            ],
            [
                'img'=>'img/team/3.jpg',
                'name'=>'Christinne Williams',
                'role'=>'Digital designer'
            ]

        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_testimonials')->insert([
            [
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'img'=>'img/avatar/01.jpg',
                'name'=>'Michael Smith',
                'role'=>'CEO Company'
            ],
            [
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'img'=>'img/avatar/02.jpg',
                'name'=>'Michael Smith',
                'role'=>'CEO Company'
            ],
            [
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'img'=>'img/avatar/01.jpg',
                'name'=>'Michael Smith',
                'role'=>'CEO Company'
            ],
            [
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'img'=>'img/avatar/02.jpg',
                'name'=>'Michael Smith',
                'role'=>'CEO Company'
            ],
            [
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'img'=>'img/avatar/01.jpg',
                'name'=>'Michael Smith',
                'role'=>'CEO Company'
            ],
            [
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'img'=>'img/avatar/02.jpg',
                'name'=>'Michael Smith',
                'role'=>'CEO Company'
            ],

        ]);
    }
}

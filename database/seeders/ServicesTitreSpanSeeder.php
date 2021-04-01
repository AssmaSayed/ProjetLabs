<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTitreSpanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_titre_spans')->insert([
            [
                'titre1'=>'get in ',
                'titre2'=>'and see the services',
                'span'=>'the lab'
            ],
            [
                'titre1'=>'get in ',
                'titre2'=>'and discover the world',
                'span'=>'the lab'
            ],


        ]);

    }
}

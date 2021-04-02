<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactMainOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_main_offices')->insert([
             [
                'titre'=>'Main office',
                'adresse1'=>'C/ Libertad, 34',
                'adresse2'=>'05200 Arévalo',
                'phone'=>'0034 37483 2445 322',
                'email'=>'hello@company.com'

             ]
        ]);
    }
}

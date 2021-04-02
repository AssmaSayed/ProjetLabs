<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactPlaceholderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_placeholders')->insert([
            [
                'name'=>'Your name',
                'email'=>'Your mail',
                'subject'=>'Subject',
                'message'=>'Message',
            ]
        ]);
    }
}

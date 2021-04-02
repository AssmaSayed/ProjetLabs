<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
           // $table->string('firstname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // $table->unsignedBigInteger('function_id');//crée une table(functions) qui aura min3 fonction 
            // $table->foreign('function_id')->references('id')->on('functions');
            // $table->unsignedBigInteger('role_id');//crée une table(functions) qui aura min3 fonction 
            // $table->foreign('role_id')->references('id')->on('roles');
            // $table->string('img');
            // $table->text('description');
            // $table->integer('check');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

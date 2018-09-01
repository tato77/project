<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if (!Schema::hasTable('users')){ 
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('user_type',50)->default('user');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('confirm_password');
            $table->string('gender');
            $table->string('phone');
            $table->string('state');
            $table->string('city');
            $table->string('unit');
            $table->string('home_no');
            $table->integer('dept_id')->unsigned();
            $table->string('Qualification');
            $table->integer('grad_id')->unsigned();
            $table->integer('job_id')->unsigned();
            $table->string('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLattersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        if (!Schema::hasTable('latters')){
        Schema::create('latters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('reciver_id')->unsigned();
            $table->integer('sender')->unsigned();
            $table->integer('dept_id')->unsigned();
            $table->string('title');
            $table->text('body');
            $table->integer('status')->default(0);
            $table->text('filename')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on ('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('type')->references('id')->on ('lattertypes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('dept_id')->references('id')->on ('depts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('reciver_id')->references('id')->on ('users');
            $table->foreign('sender')->references('id')->on ('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('latters');
    }
}

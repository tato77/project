<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitteemembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('committeemembers')){
        Schema::create('committeemembers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('commit_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('Position');
            $table->timestamps();

            $table->foreign('commit_id')->references('id')->on ('committees')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on ('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('committeemembers');
    }
}

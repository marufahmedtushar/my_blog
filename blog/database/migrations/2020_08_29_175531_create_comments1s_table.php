<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComments1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments1s', function (Blueprint $table) {
            $table->id();
            $table->text('comment');
            $table->timestamps();
        });


        Schema::table('comments1s', function (Blueprint $table) {
            $table->unsignedBigInteger('post2_id');
            $table->foreign('post2_id')->references('id')->on('post2s');
        });

        Schema::table('comments1s', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments1s');
    }
}

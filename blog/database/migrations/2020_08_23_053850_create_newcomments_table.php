<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newcomments', function (Blueprint $table) {
            $table->id();
            $table->text('comment');
            $table->timestamps();
        });


        Schema::table('newcomments', function (Blueprint $table) {
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')->references('id')->on('newposts');
        });

        Schema::table('newcomments', function (Blueprint $table) {
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
        Schema::dropIfExists('newcomments');
    }
}

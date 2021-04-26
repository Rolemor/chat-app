<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FriendRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friend_request', function (Blueprint $table) {
            $table->bigInteger('friend_id')->unsigned()->index();
            $table->foreign('friend_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friend_request');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedBackImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_back_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('url');
            $table->integer('feedback_id')->unsigned()->nullable();
            $table->foreign('feedback_id')->references('id')->on('feed_backs')->onDelete('cascade');
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
        Schema::dropIfExists('feed_back_images');
    }
}

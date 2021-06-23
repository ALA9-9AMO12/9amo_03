<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            /*
            $table->dropForeign('id');
            */
            $table->id('postid')->autoIncrement();
            /*
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('pageid')->references('pageid')->on('pages');
            */
            $table->foreignId('userid')->references('userid')->on('users');
            $table->foreignId('pageid')->references('pageid')->on('pages');
            $table->char('title',255);
            $table->mediumText('content');
            $table->date('date');

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
        Schema::dropIfExists('posts');
    }
}

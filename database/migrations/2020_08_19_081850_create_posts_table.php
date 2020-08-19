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
            $table->id();
            $table->unsignedBigInteger('category_posts_id');
            $table->foreign('category_posts_id')->references('id')->on('category_posts');
            $table->string('title', 75);
            $table->string('image', 255);
            $table->boolean('show_index');
            $table->boolean('is_trending');
            $table->tinyInteger('likes');
            $table->text('content');
            $table->string('slug', 255);
            $table->string('meta_title', 255);
            $table->string('meta_desc', 512);
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

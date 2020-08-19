<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categories_recipes_id');
            $table->foreign('categories_recipes_id')->references('id')->on('category_recipes');
            $table->string('title', 75);
            $table->string('image', 255);
            $table->string('slug', 255);
            $table->text('content');
            $table->boolean('status');
            $table->boolean('show_index');
            $table->tinyInteger('likes');
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
        Schema::dropIfExists('recipes');
    }
}

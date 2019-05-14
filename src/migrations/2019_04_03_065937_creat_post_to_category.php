<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatPostToCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('blog_post_category')) {
            Schema::create('blog_post_category', function (Blueprint $table) {
                $table->integer('blog_article_id')->unsigned()->nullable();
                $table->integer('blog_category_id')->unsigned()->nullable();

                $table->foreign('blog_article_id')->references('id')->on('blog_post')->onDelete('cascade');
                $table->foreign('blog_category_id')->references('id')->on('blog_categories')->onDelete('cascade');
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
        Schema::dropIfExists('blog_post_category');

    }
}

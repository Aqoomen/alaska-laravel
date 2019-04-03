<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('blog_posts')) {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->timestamp('published_at')->nullable()->default(null);
            $table->boolean('published')->default(false);

            $table->string('image')->nullable()->default(null);

            $table->string('title')->nullable()->default(null);
            $table->string('code')->nullable()->default(null);
            $table->text('preview')->nullable();
            $table->text('content')->nullable();
            $table->string('seo_title')->nullable()->default(null);
            $table->string('seo_description')->nullable()->default(null);
            $table->string('seo_keywords')->nullable()->default(null);

            $table->integer('blog_id')->unsigned()->default(0);
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
        Schema::dropIfExists('blog_posts');
    }
}

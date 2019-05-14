<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('blog_categories')) {
            Schema::create('blog_categories', function (Blueprint $table) {
                $table->increments('id');
                $table->timestamps();

                $table->string('title')->nullable()->default(null);
                $table->string('code')->nullable()->default(null);
                $table->boolean('published')->default(false);
                $table->text('preview')->nullable();
                $table->text('description')->nullable();

                $table->string('image')->nullable()->default(null);

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
        Schema::dropIfExists('blog_categories');
    }
}

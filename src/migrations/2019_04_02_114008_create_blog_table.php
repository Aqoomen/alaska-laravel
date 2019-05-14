<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      if (!Schema::hasTable('blog')) {
        Schema::create('blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->boolean('published')->default(false);
            $table->integer('sort')->unsigned()->default(0);

            $table->string('title')->nullable()->default(null);
            $table->string('code')->nullable()->default(null);
            $table->text('description')->nullable();

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
        Schema::dropIfExists('blog');
    }
}

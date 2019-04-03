<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('pages')) {
          Schema::create('pages', function (Blueprint $table) {
              $table->increments('id');
              $table->timestamps();

              $table->boolean('published')->default(false);
              $table->boolean('use_blade')->default(false);
              $table->string('blade_view')->nullable()->default(null);

              $table->integer('sort')->unsigned()->default(0);

              $table->string('title')->nullable()->default(null);
              $table->string('code')->nullable()->default(null);
              $table->text('preview')->nullable();
              $table->text('content')->nullable();

              $table->string('seo_title')->nullable()->default(null);
              $table->string('seo_description')->nullable()->default(null);
              $table->string('seo_keywords')->nullable()->default(null);
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
        //
    }
}

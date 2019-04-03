<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('menus')) {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('sort')->unsigned()->default(0);
            $table->string('title')->nullable()->default(null);
            $table->string('description')->nullable()->default(null);
            $table->string('code')->nullable()->default(null);
            $table->boolean('published')->default(false);
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
        Schema::dropIfExists('menus');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('menu_items')) {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('sort')->unsigned()->default(0);
            $table->string('title')->nullable()->default(null);
            $table->string('short_title')->nullable()->default(null);

            $table->integer('parent_id')->unsigned()->default(0);
            $table->string('code')->nullable()->default(null);
            $table->boolean('published')->default(false);

            $table->integer('menu_id')->unsigned()->default(0);
        });
      }

      if (Schema::hasTable('menus')) {
        Schema::table('menu_items', function ($table) {
            $table->foreign('menu_id')
                  ->references('id')->on('menus')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
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
        Schema::dropIfExists('menu_items');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('book_types')) {
          Schema::create('book_types', function (Blueprint $table) {


              $table->increments('id');
              $table->string('name');
              $table->integer('sort')->default(500);
              $table->string('code')->unique();
              $table->text('description');
              $table->boolean('active');
              $table->boolean('is_shop');
              $table->timestamps();

              $table->string('xml_id')->unique()->nullable();
          });
        }

        if (!Schema::hasTable('book_sections')) {
          Schema::create('book_sections', function (Blueprint $table) {


              $table->increments('id');
              $table->string('name');
              $table->integer('sort')->default(500);
              $table->string('code')->unique();
              $table->string('image')->nullable();
              $table->text('description')->nullable();
              $table->text('short_description')->nullable();
              $table->boolean('active');
              $table->timestamps();

              $table->string('seo_title')->nullable();
              $table->string('seo_description')->nullable();
              $table->string('seo_keywords')->nullable();

              $table->string('xml_id')->unique()->nullable();

              $table->integer('section_id')->unsigned()->nullable();;
              $table->integer('book_id')->unsigned()->nullable();;



          });
        }

        if (Schema::hasTable('book_sections')) {
          Schema::table('book_sections', function ($table) {
              $table->foreign('book_id')
                    ->references('id')->on('book_types')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
          });
        }

        if (!Schema::hasTable('book_elements')) {
          Schema::create('book_elements', function (Blueprint $table) {


              $table->increments('id');
              $table->string('name');
              $table->integer('sort')->default(500);
              $table->string('code')->unique();
              $table->string('image')->nullable();
              $table->text('description');
              $table->boolean('active');
              $table->timestamps();

              $table->string('seo_title')->nullable();
              $table->string('seo_description')->nullable();
              $table->string('seo_keywords')->nullable();

              $table->string('xml_id')->unique()->nullable();

              $table->integer('section_id')->unsigned()->nullable();
              $table->integer('book_id')->unsigned()->nullable();


          });
        }


        if (Schema::hasTable('book_elements')) {
          Schema::table('book_elements', function ($table) {
              $table->foreign('book_id')
                    ->references('id')->on('book_types')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

              $table->foreign('section_id')
                          ->references('id')->on('book_sections')
                          ->onDelete('cascade')
                          ->onUpdate('cascade');
          });
        }

        if (!Schema::hasTable('book_properties')) {
          Schema::create('book_properties', function (Blueprint $table) {


              $table->increments('id');
              $table->string('name');
              $table->integer('sort')->default(500);
              $table->string('code')->unique();
              $table->integer('type_id');
              $table->timestamps();

              $table->string('xml_id')->unique()->nullable();

              $table->integer('book_id')->unsigned()->nullable();

          });
        }

        if (!Schema::hasTable('book_property_values')) {
          Schema::create('book_property_values', function (Blueprint $table) {


              $table->increments('id');
              $table->integer('property_id');
              $table->string('value');
              $table->string('description');
              $table->integer('element_id');
              $table->timestamps();
          });
        }

        if (!Schema::hasTable('book_property_types')) {
          Schema::create('book_property_types', function (Blueprint $table) {


              $table->increments('id');
              $table->string('name');
              $table->integer('sort')->default(500);
              $table->string('description');
              $table->string('code')->unique();
              $table->timestamps();
          });
        }

        if (!Schema::hasTable('prices_types')) {
          Schema::create('prices_types', function (Blueprint $table) {


              $table->increments('id');
              $table->integer('user_group_id');
              $table->string('name');
              $table->integer('sort')->default(500);
              $table->string('code')->unique();

              $table->timestamps();

              $table->string('xml_id')->unique()->nullable();
          });
        }

        if (!Schema::hasTable('prices')) {
          Schema::create('prices', function (Blueprint $table) {


              $table->increments('id');
              $table->integer('product_id')->unsigned()->nullable();
              $table->double('price');
              $table->double('q_from');
              $table->double('q_to');
              $table->string('currency');

              $table->integer('price_type')->unsigned()->nullable();

              $table->string('xml_id')->unique()->nullable();

              $table->timestamps();




          });
        }

        if (Schema::hasTable('prices')) {
          Schema::table('prices', function ($table) {
              $table->foreign('product_id')
                    ->references('id')->on('book_elements')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

              $table->foreign('price_type')
                     ->references('id')->on('prices_types')
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
        Schema::dropIfExists('book_types');
        Schema::dropIfExists('book_sections');
        Schema::dropIfExists('book_elements');
        Schema::dropIfExists('book_properties');
        Schema::dropIfExists('book_property_values');
        Schema::dropIfExists('book_property_types');
        Schema::dropIfExists('prices');
        Schema::dropIfExists('prices_types');
    }
}

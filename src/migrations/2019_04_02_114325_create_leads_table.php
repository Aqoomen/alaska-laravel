<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('leads')) {
          Schema::create('leads', function (Blueprint $table) {
              $table->increments('id');
              $table->timestamps();

              $table->string('name')->nullable()->default(null);
              $table->string('phone')->nullable()->default(null);
              $table->string('email')->nullable()->default(null);

              $table->string('utm_source')->nullable()->default(null);
              $table->string('utm_medium')->nullable()->default(null);
              $table->string('utm_campaign')->nullable()->default(null);
              $table->string('utm_term')->nullable()->default(null);
              $table->string('utm_content')->nullable()->default(null);

              $table->string('type_form')->nullable()->default(null);
              $table->string('ip_adress')->nullable()->default(null);
 
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
        Schema::dropIfExists('leads');
    }
}

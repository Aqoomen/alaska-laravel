<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('admins')) {
          Schema::create('admins', function (Blueprint $table) {
              $table->increments('id');
              $table->timestamps();
              $table->rememberToken();
              
              $table->string('phone')->unique()->nullable()->default(null);
              $table->string('email')->unique()->nullable()->default(null);

              $table->string('password', 60)->nullable()->default(null);
              $table->string('name')->nullable()->default(null);
              $table->boolean('activated')->default(1);
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
        Schema::dropIfExists('admins');
    }
}

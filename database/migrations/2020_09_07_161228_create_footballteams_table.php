<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootballteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footballteams', function (Blueprint $table) {
          // Preset id
          $table->id();

          // Name
          $table->string("name");

          // Nationality
          $table->string("nationality");

          // Colors
          $table->string("colors");

          // Fondation
          $table->year("foundation");

          // Trophies
          $table->longText("trophies");

          // Preset created_at & updated_at
          $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footballteams');
    }
}

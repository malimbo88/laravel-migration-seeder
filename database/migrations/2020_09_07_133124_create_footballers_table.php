<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootballersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footballers', function (Blueprint $table) {
            // Preset id
            $table->id();

            // Name
            $table->string("name");

            // Lastname
            $table->string("lastname");

            // Nationality
            $table->string("nationality");

            // Position
            $table->string("position");

            // Age
            $table->integer("age");

            // Description
            $table->longText("description");

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
        Schema::dropIfExists('footballers');
    }
}

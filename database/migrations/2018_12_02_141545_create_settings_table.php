<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {/////// Start Function Up //////
        Schema::create('settings', function (Blueprint $table) {/////// Start Creating Schema//////
            $table->increments('id');
            $table->string('icon')->nullable();
            $table->string('logo')->nullable();
            $table->string('main_language')->nullable();
            $table->enum('status',['opened','closed'])->default('opened');
            $table->string('address')->default('address');
            $table->string('mobile_number')->default('01111111111');
            $table->string('mail')->default('example@mail.com');
            $table->string('long')->nullable();
            $table->string('lat')->nullable();
            $table->string('facebook')->nullable();
            $table->string('insta')->nullable();
            $table->string('youtube')->nullable();
            $table->string('twitter')->nullable();
            $table->timestamps();
        });////////// End Schema Creating //////////
    }////////// End Function Up //////////

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}

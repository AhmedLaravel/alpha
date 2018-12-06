<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {/////// Start Function Up//////
        Schema::create('services', function (Blueprint $table) {/////// Start Creating Schema//////
            $table->increments('service_id');
            $table->string('service_icon');
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
        Schema::dropIfExists('services');
    }
}

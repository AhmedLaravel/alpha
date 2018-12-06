<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {///////// Start Function Up
        Schema::create('visions', function (Blueprint $table) { /////// Start Creating Schema//////
            $table->increments('vision_id');
            $table->string('vision_title');
            $table->longText('vision_content');
            $table->string('vision_image');
            $table->string('vision_date');
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
        Schema::dropIfExists('vissions');
    }
}

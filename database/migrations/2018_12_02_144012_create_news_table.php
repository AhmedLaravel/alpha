<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {///////// Start Function Up ///////////
        Schema::create('news', function (Blueprint $table) {/////// Start Creating Schema//////
            $table->increments('news_id');
            $table->string('news_image');
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
        Schema::dropIfExists('news');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisionDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vision_descriptions', function (Blueprint $table) {
            $table->increments('vision_description_id');
            $table->integer('language_id')->unsigned()->index();
            $table->integer('vision_id')->unsigned()->index();
            $table->string('vision_title');
            $table->string('vision_date');
            $table->longText('vision_content');
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
        Schema::dropIfExists('vision_descriptions');
    }
}

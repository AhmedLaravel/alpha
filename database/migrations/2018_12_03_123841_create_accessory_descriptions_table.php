<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessoryDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessory_descriptions', function (Blueprint $table) {
            $table->increments('accessory_description_id');
            $table->integer('language_id')->unsigned()->index();
            $table->integer('accessory_id')->unsigned()->index();
            $table->string('accessory_name');
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
        Schema::dropIfExists('accessory_descriptions');
    }
}

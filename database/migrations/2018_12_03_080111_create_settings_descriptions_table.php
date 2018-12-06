<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings_descriptions', function (Blueprint $table) {
            $table->increments('settings_description_id');
            $table->integer('language_id')->unsigned()->index();
            $table->integer('settings_id')->unsigned()->index();
            $table->string('site_name');
            $table->string('work_time');
            $table->longText('about_our_work');
            $table->longText('maintenance_message');
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
        Schema::dropIfExists('settings_descriptions');
    }
}

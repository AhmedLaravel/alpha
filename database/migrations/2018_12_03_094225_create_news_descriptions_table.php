<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_descriptions', function (Blueprint $table) {
            $table->increments('news_description_id');
            $table->integer('news_id')->unsigned()->index();
            $table->integer('language_id')->unsigned()->index();
            $table->string('news_title');
            $table->longText('news_content');
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
        Schema::dropIfExists('news_descriptions');
    }
}

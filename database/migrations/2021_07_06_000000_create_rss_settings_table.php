<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRssSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mul-rss_settings', function (Blueprint $table) {
            $table->id();
            $table->string('url', 255);
            $table->integer('title_length');
            $table->integer('count');
            $table->integer('time_check');
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
        Schema::dropIfExists('mul-rss_settings');
    }
}

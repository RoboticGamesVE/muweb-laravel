<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mul-register_settings', function (Blueprint $table) {
            $table->id();
            $table->boolean('required_verify')->default(0);
            $table->boolean('required_token')->default(0);
            $table->integer('length_token')->default(12);
            $table->string('default_token', 12)->default('111111111111');
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
        Schema::dropIfExists('mul-register_settings');
    }
}

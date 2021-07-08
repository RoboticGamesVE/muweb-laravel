<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddpointSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mul-addpoint_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('strength_limit');
            $table->integer('agility_limit');
            $table->integer('vitality_limit');
            $table->integer('energy_limit');
            $table->integer('command_limit');
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
        Schema::dropIfExists('mul-addpoint_settings');
    }
}

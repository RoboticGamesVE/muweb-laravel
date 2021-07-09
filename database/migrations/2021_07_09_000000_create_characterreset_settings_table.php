<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterresetSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mul-characterreset_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('level');
            $table->integer('zen');
            $table->integer('level_points');
            $table->integer('level_points_formula');
            $table->boolean('clear_skills');
            $table->boolean('clear_inventory');
            $table->boolean('reset_stats');
            $table->integer('reset_limit');
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
        Schema::dropIfExists('mul-characterreset_settings');
    }
}

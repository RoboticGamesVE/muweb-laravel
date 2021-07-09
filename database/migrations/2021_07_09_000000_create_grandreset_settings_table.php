<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrandresetSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mul-grandreset_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('resets');
            $table->integer('level');
            $table->integer('zen');
            $table->integer('credits');
            $table->integer('credits_formula');
            $table->integer('level_points');
            $table->integer('level_points_formula');
            $table->boolean('clear_skills');
            $table->boolean('clear_inventory');
            $table->boolean('reset_stats');
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
        Schema::dropIfExists('mul-grandreset_settings');
    }
}

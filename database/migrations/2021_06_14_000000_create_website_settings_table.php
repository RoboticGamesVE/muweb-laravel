<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mul-website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_url', 255);
            $table->string('website_title', 255);
            $table->boolean('md5')->default(0);
            $table->string('crypt_key', 8)->default('12345678');
            $table->string('admin_nick', 255);
            $table->string('admin_mail', 255);
            $table->integer('id_template')->nullable();
            $table->string('copyright', 255)->nullable();
            $table->string('license', 19);
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
        Schema::dropIfExists('mul-website_settings');
    }
}

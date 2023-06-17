<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteConfigSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_config_settings', function (Blueprint $table) {
            $table->id();

            // general
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('title_web')->nullable();
            $table->string('name_web')->nullable();
            $table->string('footer_web')->nullable();
            $table->text('desc_web')->nullable();
            $table->string('version_web')->nullable();

            // info
            $table->string('wa')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('working_hours')->nullable();

            // sosmed
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();

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
        Schema::dropIfExists('website_config_settings');
    }
}

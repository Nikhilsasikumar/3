<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siteinfos', function (Blueprint $table) {
            $table->id();
            $table->string('phone', 25);
            $table->string('whatsapp', 25);
            $table->string('email', 25);
            $table->string('address1', 250);
            $table->string('address2', 250);
            $table->string('facebook', 255);
            $table->string('twitter', 255);
            $table->string('instagram', 255);
            $table->string('linkedin', 255);
            $table->string('map', 1500);
            $table->string('mapdirection', 1500);

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
        Schema::dropIfExists('siteinfos');
    }
}

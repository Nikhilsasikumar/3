<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceEnqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_enqs', function (Blueprint $table) {
            $table->id();
            $table->integer('service');
            $table->string('fullname', 100);
            $table->string('phone', 100);
            $table->string('place', 100);
            $table->string('district', 100);
            $table->string('message', 500);
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
        Schema::dropIfExists('service_enqs');
    }
}

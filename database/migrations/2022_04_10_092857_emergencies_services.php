<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmergenciesServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('emergencies_services', function (Blueprint $table) {
         $table->unsignedBigInteger('emergency_id');
        $table->unsignedBigInteger('service_id');

        $table->primary(['emergency_id','service_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emergencies_services');
    }
}

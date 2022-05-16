<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmergenciesSiks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('emergencies_siks', function (Blueprint $table) {
         $table->unsignedBigInteger('emergency_id');
        $table->unsignedBigInteger('sik_id');

            $table->primary(['emergency_id','sik_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('emergencies_siks');
    }
}

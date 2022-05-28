<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deds', function (Blueprint $table) {
            $table->id();
            $table->string('ded_name')->nullable();
            $table->date('ded_date')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreignId('actuality_id')
            ->constrained('actulities')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deds');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBornsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borns', function (Blueprint $table) {
            $table->id();
            $table->string('mother_name')->nullable();
            $table->string('child_name')->nullable();
            $table->string('born_date')->nullable();
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
        Schema::dropIfExists('borns');
    }
}

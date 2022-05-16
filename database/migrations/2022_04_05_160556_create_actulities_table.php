<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActulitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actulities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('mother_name')->nullable();
            $table->string('child_name')->nullable();
            $table->string('born_date')->nullable();
            $table->string('mary_name')->nullable();
            $table->date('mary_date')->nullable();
            $table->string('ded_name')->nullable();
            $table->date('ded_date')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->date('date')->nullable();
            $table->string('type')->default('other')->nullable();
            $table->string('user_name');
            $table->timestamps();

             $table->foreignId('user_id')
                  ->constrained('users')
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
        Schema::dropIfExists('actulities');
    }
}

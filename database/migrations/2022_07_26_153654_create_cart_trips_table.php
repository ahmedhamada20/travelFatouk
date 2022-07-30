<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_trips', function (Blueprint $table) {
            $table->id();
            $table->string('data');
            $table->string('time');
            $table->string('adult_number')->nullable();
            $table->string('child_number')->nullable();
            $table->longText('Extra')->nullable();
            $table->foreignId('trips_id')->references('id')->on('trips')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('cart_trips');
    }
};

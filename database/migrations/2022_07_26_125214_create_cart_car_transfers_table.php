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
        Schema::create('cart_car_transfers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->string('data');
            $table->string('time');
            $table->string('adult_number')->nullable();
            $table->string('child_number')->nullable();
            $table->string('bage')->nullable();
            $table->string('way_type')->nullable();
            $table->string('extra')->nullable();
            $table->string('price');
            $table->string('route_form');
            $table->string('route_to');
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
        Schema::dropIfExists('cart_car_transfers');
    }
};

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
        Schema::create('excludeds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('trip_id')->nullable()->constrained('trips')->cascadeOnDelete()->cascadeOnDelete();
            $table->foreignId('packages_id')->nullable()->constrained('packages')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('excludeds');
    }
};

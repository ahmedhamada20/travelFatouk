<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('footer_image');
            $table->string('transfer_image');
            $table->string('footer_logo');
            $table->string('footer_image_link');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->longText('notes');
            $table->string('address');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('YouTube');
            $table->string('Fax');
            $table->longText('description')->nullable();
            $table->longText('seo')->nullable();
            $table->longText('url')->nullable();
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
        Schema::dropIfExists('settings');
    }
};

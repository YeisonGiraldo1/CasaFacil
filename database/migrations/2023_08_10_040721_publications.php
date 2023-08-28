<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('offer_type');
            $table->string('property_type');
            $table->string('city');
            $table->string('neighborhood');
            $table->string('address');
            $table->integer('price');
            $table->string('stratum');
            $table->string('status');
            $table->decimal('size');
            $table->string('number_rooms');
            $table->string('number_bathrooms');
            $table->string('description');
            $table->string('main_image')->nullable();
            $table->string('additional_image_1')->nullable();
            $table->string('additional_image_2')->nullable();
            $table->string('additional_image_3')->nullable();
            $table->string('additional_image_4')->nullable();
            $table->string('additional_image_5')->nullable();
            $table->string('additional_image_6')->nullable();
            $table->string('additional_image_7')->nullable();
            $table->string('additional_image_8')->nullable();
            $table->string('additional_image_9')->nullable();
            $table->string('additional_image_10')->nullable();
           $table->string('email');
           $table->string('name');
           $table->string('lastname');
           $table->string('phone');
           $table->unsignedBigInteger("user_id")->nullable();
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};

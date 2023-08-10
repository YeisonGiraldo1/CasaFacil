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
            $table->decimal('size');
            $table->string('status');
            $table->string('number_environments');
            $table->string('number_rooms');
            $table->string('number_bathrooms');
            $table->string('interior_floors');
            $table->string('description');
           // $table->string('photos');
           $table->string('email');
           $table->string('name');
           $table->string('lastname');
           $table->string('phone');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

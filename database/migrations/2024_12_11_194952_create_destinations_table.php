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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->integer('tour_country_id');
            $table->string('city');
            $table->string('destination');
            $table->string('description_destination');
            $table->string('type_destination');
            $table->date('departure_day');
            $table->date('return_day');
            $table->integer('number_days');
            $table->integer('number_nights');
            $table->double('price');
            $table->double('price_promotion');
            $table->boolean('state'); // Active or Inactive
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};

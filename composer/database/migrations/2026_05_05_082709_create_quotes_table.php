<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations to create the quotes table.
     * Define the schema for the insurance quotes microservice.
     */
    public function up(): void
    {
        Schema::create('quotes', function (Blueprint $table) {
            // Unique identifier for each insurance quote
            $table->id();

            // The full name of the client associated with the quote
            $table->string('client_name');

            // The car's license plate number (e.g., B123XYZ)
            $table->string('car_plate');

            // The name of the insurance company providing the offer
            $table->string('insurer_name');

            // The calculated price (8 total digits, 2 for decimal places)
            $table->decimal('price', 8, 2);

            // Standard Laravel timestamps for created_at and updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};

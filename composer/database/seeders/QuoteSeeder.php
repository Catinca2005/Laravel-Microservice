<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuoteSeeder extends Seeder
{
    /**
     * Seed the application's database with mock insurance quotes.
     * Uses the DB Facade to insert raw data as per requirements.
     */
    public function run(): void
    {
        // Insert mock data directly into the 'quotes' table
        DB::table('quotes')->insert([
            [
                'client_name'  => 'Ion Popescu',
                'car_plate'    => 'B123XYZ',
                'insurer_name' => 'AsiguratorX',
                'price'        => 545.50,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'client_name'  => 'Maria Ionescu',
                'car_plate'    => 'CJ45ABC',
                'insurer_name' => 'AsiguratorY',
                'price'        => 480.00,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }
}

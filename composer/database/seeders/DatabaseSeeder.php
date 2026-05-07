<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * This is the main orchestrator for all data seeding operations.
     */
    public function run(): void
    {
        // Trigger the specific seeder for insurance quotes
        $this->call([
            QuoteSeeder::class,
        ]);
    }
}

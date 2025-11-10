<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ini_set('max_execution_time', 300); // increase seeding time limit

        // You can call multiple seeders here
        $this->call([
            StudentsTableSeeder::class,
        ]);
    }
}



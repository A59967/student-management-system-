<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    public function run(): void
    {
        Student::truncate();

        Student::create([
            'first_name' => 'Alka',
            'last_name' => 'kumari',
            'email' => 'Alka@example.com',
            'phone' => '1234567890',
            'course' => 'Computer',
        ]);

        Student::create([
            'first_name' => 'Dipanshi',
            'last_name' => 'Kumari',
            'email' => 'Dipanshi@example.com',
            'phone' => '9876543210',
            'course' => 'Mathematics',
        ]);
    }
}

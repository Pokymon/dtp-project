<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::insert([
            [
                'name' => 'John Doe',
                'phone_number' => '1234567890',
                'address' => '1234 Main St',
                'class' => '1A',
                'photo' => 'photos/1.jpg',
            ],
            [
                'name' => 'Jane Doe',
                'phone_number' => '0987654321',
                'address' => '4321 Main St',
                'class' => '1B',
                'photo' => 'photos/2.jpg',
            ],
            [
                'name' => 'John Smith',
                'phone_number' => '1234567890',
                'address' => '1234 Main St',
                'class' => '1A',
                'photo' => 'photos/3.jpg',
            ],
            [
                'name' => 'Jane Smith',
                'phone_number' => '0987654321',
                'address' => '4321 Main St',
                'class' => '1B',
                'photo' => 'photos/4.jpg',
            ],
            [
                'name' => 'John Doe',
                'phone_number' => '1234567890',
                'address' => '1234 Main St',
                'class' => '1A',
                'photo' => 'photos/5.jpg',
            ],
            [
                'name' => 'Jane Doe',
                'phone_number' => '0987654321',
                'address' => '4321 Main St',
                'class' => '1B',
                'photo' => 'photos/6.jpg',
            ],
            [
                'name' => 'John Smith',
                'phone_number' => '1234567890',
                'address' => '1234 Main St',
                'class' => '1A',
                'photo' => 'photos/7.jpg',
            ],
            [
                'name' => 'Jane Smith',
                'phone_number' => '0987654321',
                'address' => '4321 Main St',
                'class' => '1B',
                'photo' => 'photos/8.jpg',
            ],
        ]);
    }
}

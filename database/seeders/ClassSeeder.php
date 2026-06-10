<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassRoom::create([
            'class_name' => '10th',
            'class_teacher_id' => 3,
            'room_no' => 'A-102',
            'academic_year' => '2024-25',

            'created_at' => now(),
            'updated_at' => now(),
        ]);
        ClassRoom::create([
            'class_name' => '10th',
            'class_teacher_id' => 4,
            'room_no' => 'A-102',
            'academic_year' => '2024-25',

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

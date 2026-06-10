<?php

namespace Database\Seeders;

use App\Models\StudentClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentClass::insert([
            [
                'student_id' => 5,
                'class_id' => 1,
                'roll_no' => '1',
                'status' => 'active',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => 7,
                'class_id' => 1,
                'roll_no' => '2',
                'status' => 'active',

                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

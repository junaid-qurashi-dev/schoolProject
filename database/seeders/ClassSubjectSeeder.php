<?php

namespace Database\Seeders;

use App\Models\ClassSubject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassSubject::insert([
            [
                'class_id' => 1,
                'subject_id' => 1,
                'teacher_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_id' => 1,
                'subject_id' => 2,
                'teacher_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_id' => 1,
                'subject_id' => 3,
                'teacher_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Timetable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Timetable::insert([
            [
                'class_id' => 1,
                'subject_id' => 1,
                'teacher_id' => 3,
                'day' => 'Monday',
                'start_time' => '07:30:00',
                'end_time' => '08:15:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_id' => 1,
                'subject_id' => 2,
                'teacher_id' => 4,
                'day' => 'Monday',
                'start_time' => '08:15:00',
                'end_time' => '09:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

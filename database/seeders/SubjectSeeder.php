<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        Subject::insert([
            [
                'name' => 'Mathematics',
                'code' => 'MATH',
                'description' => 'Basic Mathematics subject',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Science',
                'code' => 'SCI',
                'description' => 'Physics, Chemistry, Biology basics',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'English',
                'code' => 'ENG',
                'description' => 'Grammar and Literature',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hindi',
                'code' => 'HIN',
                'description' => 'Hindi language subject',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Social Studies',
                'code' => 'SST',
                'description' => 'History, Geography, Civics',

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

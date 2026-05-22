<?php

namespace Database\Seeders;

use App\Models\Fee;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = User::where('role','student')->get();
        foreach($students as $student){
            Fee::create([
            'student_id' => $student->id,
            ''
            ]);
        }
    }
}

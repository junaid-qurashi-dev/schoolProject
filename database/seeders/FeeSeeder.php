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
        $students = User::where('role', 'student')->get();
        foreach ($students as $student) {
            Fee::firstOrCreate([
                'student_id' => $student->id,
                'month' => "May",
                "total_fee" => 5000,
                "paid_amount" => 3000,
                "remaining_amount" => 2000,
                "payment_method" => 'Cash',
                "transaction_id" => 'TXN1001',
                'payment_date' => now(),
                'status' => 'Partial',
            ]);
        }
    }
}

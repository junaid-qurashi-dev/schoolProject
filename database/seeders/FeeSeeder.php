<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Fee;

class FeeSeeder extends Seeder
{
    public function run(): void
    {
        $students = User::where('role', 'student')->get();

        foreach ($students as $student) {

            Fee::firstOrCreate(
                [
                    'student_id' => $student->id,
                    'month' => 'May',
                ],
                [
                    'total_fee' => 5000,
                    'paid_amount' => 3000,
                    'remaining_amount' => 2000,
                    'payment_method' => 'Cash',
                    'transaction_id' => 'TXN' . rand(1000, 9999),
                    'payment_date' => now(),
                    'status' => 'Partial',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}

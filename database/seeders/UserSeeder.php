<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {

        // ================= TEACHERS =================
        User::create([
            'name' => 'Rajesh Singh',
            'email' => 'rajesh@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'teacher',
            'gender' => 'male',
            'phone' => '9000000001',
            'qualification' => 'MSc Mathematics',
            'salary' => 30000,
            'experience' => '5 years',
            'subject' => 'Mathematics',
            'joining_date' => '2022-04-01',
            'address' => 'Jaipur, Rajasthan'
        ]);

        User::create([
            'name' => 'Anita Sharma',
            'email' => 'anita@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'teacher',
            'gender' => 'female',
            'phone' => '9000000002',
            'qualification' => 'MA English',
            'salary' => 28000,
            'experience' => '4 years',
            'subject' => 'English',
            'joining_date' => '2021-06-15',
            'address' => 'Nagaur, Rajasthan'
        ]);

        User::create([
            'name' => 'Vikram Verma',
            'email' => 'vikram@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'teacher',
            'gender' => 'male',
            'phone' => '9000000003',
            'qualification' => 'MSc Science',
            'salary' => 32000,
            'experience' => '6 years',
            'subject' => 'Science',
            'joining_date' => '2020-01-10',
            'address' => 'Ajmer, Rajasthan'
        ]);

        User::create([
            'name' => 'Pooja Sharma',
            'email' => 'pooja@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'teacher',
            'gender' => 'female',
            'phone' => '9000000004',
            'qualification' => 'MA History',
            'salary' => 27000,
            'experience' => '3 years',
            'subject' => 'Social Studies',
            'joining_date' => '2023-03-20',
            'address' => 'Jodhpur, Rajasthan'
        ]);

        User::create([
            'name' => 'Suresh Kumar',
            'email' => 'suresh@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'teacher',
            'gender' => 'male',
            'phone' => '9000000005',
            'qualification' => 'MCA Computer',
            'salary' => 35000,
            'experience' => '7 years',
            'subject' => 'Computer',
            'joining_date' => '2019-08-05',
            'address' => 'Bikaner, Rajasthan'
        ]);


        // ================= STUDENTS =================
        User::create([
            'name' => 'Mahesh Yadav',
            'email' => 'mahesh@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'student',
            'gender' => 'male',
            'phone' => '9000000006',
            'dob' => '2008-05-10',
            'class' => '10th',
            'joining_date' => '2024-04-01',
            'address' => 'Jaipur, Rajasthan'
        ]);

        User::create([
            'name' => 'Ramesh Gupta',
            'email' => 'ramesh@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'student',
            'gender' => 'male',
            'phone' => '9000000007',
            'dob' => '2008-07-12',
            'class' => '10th',
            'joining_date' => '2024-04-01',
            'address' => 'Nagaur, Rajasthan'
        ]);

        User::create([
            'name' => 'Sita Kumari',
            'email' => 'sita@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'student',
            'gender' => 'female',
            'phone' => '9000000008',
            'dob' => '2008-03-22',
            'class' => '10th',
            'joining_date' => '2024-04-01',
            'address' => 'Ajmer, Rajasthan'
        ]);

        User::create([
            'name' => 'Aman Verma',
            'email' => 'aman@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'student',
            'gender' => 'male',
            'phone' => '9000000009',
            'dob' => '2008-09-18',
            'class' => '9th',
            'joining_date' => '2024-04-01',
            'address' => 'Jodhpur, Rajasthan',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'name' => 'Neha Singh',
            'email' => 'neha@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'student',
            'gender' => 'female',
            'phone' => '9000000010',
            'dob' => '2008-11-05',
            'class' => '9th',

            'joining_date' => '2024-04-01',
            'address' => 'Bikaner, Rajasthan',

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

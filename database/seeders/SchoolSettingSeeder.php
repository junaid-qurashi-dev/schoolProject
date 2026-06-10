<?php

namespace Database\Seeders;

use App\Models\SchoolSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SchoolSetting::create([
            'school_name' => 'ABC Public School',
            'summer_start_time' => '07:30:00',
            'summer_end_time' => '02:00:00',
            'winter_start_time' => '10:00:00',
            'winter_end_time' => '04:00:00',
            'current_session' => 'summer',

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

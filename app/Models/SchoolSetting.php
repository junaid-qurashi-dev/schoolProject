<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolSetting extends Model
{
    protected $fillable = [
        'school_name',
        'summer_start_time',
        'summer_end_time',
        'winter_start_time',
        'winter_end_time',
        'working_days',
        'current_session'
    ];
}

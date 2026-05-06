<?php

namespace App\Models;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }



    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}

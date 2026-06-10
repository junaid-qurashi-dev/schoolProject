<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $fillable = [
        'student_id',
        'class_id',
        'roll_no',
        'addmission_date',
        'status'
    ];
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class, 'class_id');
    }
}

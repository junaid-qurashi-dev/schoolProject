<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'phone',
        'dob',
        'subject',
        'joining_date',
        'class',
        'role',
        'qualification',
        'salary',
        'experience',
        'address'
    ];
    public function fees()
    {
        return $this->hasMany(Fee::class, 'student_id');
    }

    public function teachingSubjects()
    {
        return $this->hasMany(ClassSubject::class, 'teacher_id');
    }

    public function timetables()
    {
        return $this->hasMany(Timetable::class, 'teacher_id');
    }

    public function studentClasses()
    {
        return $this->hasMany(StudentClass::class, 'student_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    protected $table = 'classes';
    protected $fillable = [
        'class_name',
      
        'class_teacher_id',
        'room_no',
        'academic_year',
        

    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'class_teacher_id');
    }
    public function subjects()
    {
        return $this->hasMany(ClassSubject::class, 'class_id');
    }
    public function students()
    {
        return $this->hasMany(StudentClass::class, 'class_id');
    }
    public function timetables()
    {
        return $this->hasMany(Timetable::class, 'class_id');
    }
}

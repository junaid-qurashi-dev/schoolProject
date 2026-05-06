<?php

namespace App\Models;

use  App\Models\Classes;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $fillable = [
        'name',
        'email',
        'phone',
        'dob',
        'gender',
        'joining_date',
        'experience',
        'salary',
        'photo',
        'address',
        'user_id'
    ];

    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'class_teacher', 'teacher_id', 'class_id');
    }
}

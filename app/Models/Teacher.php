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

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'parent_id',
        'gender',
        'dob',
        'email',
        'phone',
        'class',
        'section',
        'photo',
        'admission_date',
        'address'
    ];
}

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
}

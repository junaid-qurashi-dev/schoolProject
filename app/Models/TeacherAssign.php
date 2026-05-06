<?php

namespace App\Models;

use  App\Models\Classes;
use Illuminate\Database\Eloquent\Model;

class TeacherAssign extends Model
{

    protected $fillable = [
        'section',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
}

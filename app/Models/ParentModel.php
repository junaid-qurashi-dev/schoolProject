<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentModel extends Model
{
    protected $table = 'parents'; // safe side

    protected $fillable = [
        'parent_code',
        'father_name',
        'mother_name',
        'photo',
        'occupation',
        'religion',
        'email',
        'phone',
        'address',
        'admission_date',
    ];

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}

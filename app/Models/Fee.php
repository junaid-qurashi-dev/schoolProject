<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $fillable = [
        'student_id',
        'month',
        'totale_fee',
        'paid_amount',
        'remaining_amount',
        'payment_method',
        'transaction_id',
        'payment_date',
        'satus'
    ];
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}

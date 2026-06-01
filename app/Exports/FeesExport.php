<?php

namespace App\Exports;

use App\Models\Fee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FeesExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Fee::with('student')->get()->map(function ($fee) {

            return [
                'Student Name' => $fee->student->name,
                'Month' => $fee->month,
                'Total Fee' => $fee->total_fee,
                'Paid Amount' => $fee->paid_amount,
                'Remaining Amount' => $fee->remaining_amount,
                'Payment Method' => $fee->payment_method,
                'Status' => $fee->status,
                'Payment Date' => $fee->payment_date,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Student Name',
            'Month',
            'Total Fee',
            'Paid Amount',
            'Remaining Amount',
            'Payment Method',
            'Status',
            'Payment Date'
        ];
    }
}

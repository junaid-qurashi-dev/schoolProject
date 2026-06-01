<?php

namespace App\Http\Controllers;

use App\Exports\FeesExport;
use App\Models\Fee;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FeeController extends Controller
{


    public function index(Request $request)
    {
        $query = Fee::with('student');
        if ($request->filled('search')) {
            $query->whereHas('student', function ($q) use ($request) {
                $q->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }
        if ($request->filled('class')) {
            $query->whereHas('student', function ($q) use ($request) {
                $q->where('class', $request->class);
            });
        }

        // Table Data
        $feeses = $query->orderBy('id', 'ASC')->paginate(5)->appends($request->query());
        $partialFees = Fee::where('paid_amount', '>', 0)
            ->where('remaining_amount', '>', 0)
            ->count();
        // Dashboard Status
        $totalRecord = Fee::count();

        $latestIds = Fee::selectRaw('MAX(id) as id')
            ->groupBy('student_id')
            ->pluck('id');

        $paidFees = Fee::whereIn('id', $latestIds)
            ->where('status', 'Paid')
            ->count();

        $partialFees = Fee::whereIn('id', $latestIds)
            ->where('status', 'Partial')
            ->count();

        $pendingFees = Fee::whereIn('id', $latestIds)
            ->where('status', 'Pending')
            ->count();

        $totalCollection = Fee::sum('paid_amount');
        $totalStudents = User::where('role', 'student')->count();
        return view('fees.list', compact(
            'feeses',
            'totalRecord',
            'paidFees',
            'pendingFees',
            'totalCollection',
            'partialFees',
            'totalStudents'
        ));
    }

    public function receipt($id)
    {
        $fees = Fee::with('student')->findOrFail($id);

        // Same Student All Payments
        $allFees = Fee::where('student_id', $fees->student_id)
            ->latest()
            ->paginate(3);

        // Total Paid
        $totalPaid = Fee::where('student_id', $fees->student_id)
            ->sum('paid_amount');

        return view('fees.receipt-pdf', compact(
            'fees',
            'allFees',
            'totalPaid'
        ));
    }

    public function downloadPdf($id)
    {
        $fees = Fee::with('student')->findOrFail($id);

        // Student ki sari fee history
        $allFees = Fee::where('student_id', $fees->student_id)
            ->latest()
            ->get();

        // Total Paid Amount
        $totalPaid = Fee::where('student_id', $fees->student_id)
            ->sum('paid_amount');

        $pdf = Pdf::loadView('fees.receipt', compact(
            'fees',
            'allFees',
            'totalPaid'
        ));

        return $pdf->download('fee-receipt.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new FeesExport, 'fees.xlsx');
    }


    public function view($id)
    {
        $fees = Fee::with('student')->findOrFail($id);

        // Same Student All Fee Records
        $allFees = Fee::where('student_id', $fees->student_id)
            ->latest()
            ->get();

        // Total Paid Amount
        $totalPaid = Fee::where('student_id', $fees->student_id)
            ->sum('paid_amount');

        return view('fees.viewfess', compact(
            'fees',
            'allFees',
            'totalPaid'
        ));
    }

    public function addrecord()
    {
        return view('fees.addrecord');
    }

    // Add New Record //
    public function record(Request $request)
    {
        $request->validate([
            'month'            => 'required',
            'total_fee'        => 'required|numeric',
            'paid_amount'      => 'required|numeric',
            'payment_method'   => 'required',
            'payment_date'     => 'required',
        ]);

        $record = new Fee();

        $record->month          = $request->month;
        $record->student_id     = $request->student_id;
        $record->total_fee      = $request->total_fee;
        $record->paid_amount    = $request->paid_amount;

        $record->remaining_amount =
            $request->total_fee - $request->paid_amount;

        $record->payment_method = $request->payment_method;
        $record->transaction_id = $request->transaction_id;
        $record->payment_date   = $request->payment_date;

        // Auto Status
        if ($record->remaining_amount <= 0) {
            $record->status = 'Paid';
        } elseif ($record->paid_amount > 0) {
            $record->status = 'Partial';
        } else {
            $record->status = 'Pending';
        }

        $record->save();

        return redirect()
            ->route('fees.index')
            ->with('success', 'Fee Record Added Successfully');
    }
    // Add Form
    public function add($id)
    {
        $student = User::where('role', 'student')
            ->findOrFail($id);
        $lastFee = Fee::where('student_id')
            ->latest()
            ->first();
        $lastFee = Fee::where('student_id', $id)
            ->latest()
            ->first();

        $totalPaid = Fee::where('student_id', $id)
            ->sum('paid_amount');

        return view('fees.addfees', compact(
            'student',
            'lastFee',
            'totalPaid'
        ));
        // return view('fees.addfees', compact('student', 'lastFee'));
    }

    public function create()
    {
        $students = User::where('role', 'student')->get();

        return view('fees.create', compact('students'));
    }


    public function addnew(Request $request)
    {
        $fee = new Fee();

        $fee->month = date('F');
        $fee->student_id = $request->student_id;
        $fee->total_fee = $request->total_fee;
        $fee->paid_amount = $request->paid_amount;

        $fee->remaining_amount =
            $request->total_fee - $request->paid_amount;

        $fee->payment_method = $request->payment_method;
        $fee->transaction_id = $request->transaction_id;
        $fee->payment_date = date('Y-m-d');

        if ($fee->remaining_amount <= 0) {
            $fee->status = 'Paid';
        } elseif ($fee->paid_amount > 0) {
            $fee->status = 'Partial';
        } else {
            $fee->status = 'Pending';
        }

        $fee->save();

        return redirect()
            ->route('fees.index')
            ->with('success', 'Fee Record Added Successfully');
    }

    public function getStudentFee($id)
    {
        $fee = Fee::where('student_id', $id)->latest()->first();
        return response()->json($fee);
    }


    // Store Data
    public function store(Request $request)
    {
        $request->validate([
            'student_id'      => 'required',
            'paid_amount'     => 'required|numeric|min:1',
            'payment_method'  => 'required',
        ]);

        $studentId = $request->student_id;

        // Student ki sari previous payments
        $fees = Fee::where('student_id', $studentId)
            ->orderBy('id', 'ASC')
            ->get();

        // First Record
        if ($fees->count() == 0) {

            $totalFee = $request->total_fee;

            $totalPaid = $request->paid_amount;
        } else {

            $firstFee = $fees->first();

            // Original fee amount
            $totalFee = $firstFee->total_fee;

            // Purani total payment
            $oldPaid = $fees->sum('paid_amount');

            // Nayi total payment
            $totalPaid = $oldPaid + $request->paid_amount;
        }

        // Remaining Amount
        $remaining = $totalFee - $totalPaid;

        if ($remaining < 0) {
            return back()->with('error', 'Paid amount exceeds remaining fee.');
        }

        // Status
        if ($remaining <= 0) {
            $status = 'Paid';
        } elseif ($totalPaid > 0) {
            $status = 'Partial';
        } else {
            $status = 'Pending';
        }

        // Transaction ID
        $transactionId = $request->payment_method == 'Cash'
            ? 'Cash'
            : $request->transaction_id;

        // Save Installment Record
        $fee = new Fee();

        $fee->student_id = $studentId;
        $fee->month = date('F');

        // Original Fee
        $fee->total_fee = $totalFee;

        // Sirf current installment
        $fee->paid_amount = $request->paid_amount;

        // Updated remaining
        $fee->remaining_amount = $remaining;

        $fee->payment_method = $request->payment_method;
        $fee->transaction_id = $transactionId;
        $fee->payment_date = date('Y-m-d');
        $fee->status = $status;

        $fee->save();

        return redirect()
            ->route('fees.index')
            ->with('success', 'Installment Added Successfully');
    }
}

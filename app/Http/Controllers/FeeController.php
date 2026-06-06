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
        //  =====Latest Fee per Student===== //
        $query = Fee::whereIn('id', function ($sub) {
            $sub->selectRaw('MAX(id)')->from('fees')->groupBy('student_id');
        })->with('student');

        // =====Search Filter (student name)======//
        if ($request->filled('search')) {
            $query->whereHas('student', function ($q) use ($request) {
                $q->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }

        // ====Class FIlter=====
        if ($request->filled('class')) {
            $query->whereHas('student', function ($q) use ($request) {
                $q->where('class', $request->class);
            });
        }

        // Table Data (latest per student) //
        $feeses = $query->orderBy('id', 'DESC')->paginate(5)->onEachSide(0)->appends($request->query());


        // latest ids per student (for dashboard status) //
        $latestIds = Fee::selectRaw('MAX(id)')->groupBy('student_id');

        // Dashboard Status //
        $totalRecord = Fee::count();
        $paidFees = Fee::whereIn('id', $latestIds)->where('status', 'Paid')->count();
        $partialFees = Fee::whereIn('id', $latestIds)->where('status', 'Partial')->count();
        $pendingFees  = Fee::whereIn('id', $latestIds)->where('status', 'Pendding')->count();
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

    // Card Modal Click Data Show In Modal //
    // public function cardData($type)
    // {
    //     switch ($type) {

    //         case 'students':

    //             $data = User::where('role', 'student')
    //                 ->select('id', 'name', 'class', 'phone')
    //                 ->paginate(5);

    //             return response()->json([
    //                 'title' => 'All Students',
    //                 'data' => $data
    //             ]);

    //         case 'paid':

    //             $data = Fee::with('student')
    //                 ->where('status', 'Paid')
    //                 ->whereIn('id', function ($query) {
    //                     $query->selectRaw('MAX(id)')
    //                         ->from('fees')
    //                         ->where('status', 'Paid')
    //                         ->groupBy('student_id');
    //                 })
    //                 ->paginate(5);

    //             return response()->json([
    //                 'title' => 'All Paid Students (Latest Only)',
    //                 'data' => $data
    //             ]);

    //         case 'partial':

    //             $data = Fee::with('student')
    //                 ->where('status', 'Partial')
    //                 ->whereIn('id', function ($query) {
    //                     $query->selectRaw('MAX(id)')
    //                         ->from('fees')
    //                         ->where('status', 'Partial')
    //                         ->groupBy('student_id');
    //                 })
    //                 ->paginate(5);

    //             return response()->json([
    //                 'title' => 'All Partial Students (Latest Only)',
    //                 'data' => $data
    //             ]);

    //         case 'pending':

    //             $data = Fee::with('student')
    //                 ->where('status', 'Pending')
    //                 ->whereIn('id', function ($query) {
    //                     $query->selectRaw('MAX(id)')
    //                         ->from('fees')
    //                         ->where('status', 'Pending')
    //                         ->groupBy('student_id');
    //                 })
    //                 ->paginate(5);

    //             return response()->json([
    //                 'title' => 'All Pending Students (Latest Only)',
    //                 'data' => $data
    //             ]);

    //         default:
    //             return response()->json([
    //                 'title' => "No Data",
    //                 "data" => []
    //             ]);
    //     }
    // }


    public function receipt($id)
    {
        $fees = Fee::with('student')->findOrFail($id);

        // Same Student All Payments
        $allFees = Fee::where('student_id', $fees->student_id)
            ->latest()
            ->paginate(3)->onEachSide(0);

        // Total Paid
        $totalPaid = Fee::where('student_id', $fees->student_id)
            ->sum('paid_amount');
        $totalfee = Fee::where('student_id', $fees->student_id)
            ->orderBy('id', 'asc')
            ->value('total_fee');
        return view('fees.receipt-pdf', compact(
            'fees',
            'allFees',
            'totalPaid',
            'totalfee'
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
        $totalfee = Fee::where('student_id', $fees->student_id)
            ->orderBy('id', 'asc')
            ->value('total_fee');
        $pdf = Pdf::loadView('fees.receipt', compact(
            'fees',
            'allFees',
            'totalPaid',
            'totalfee'
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

        $totalfee = Fee::where('student_id', $fees->student_id)
            ->orderBy('id', 'asc')
            ->value('total_fee');
        return view('fees.viewfess', compact(
            'fees',
            'allFees',
            'totalfee',
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

    // Edit New Record Page //
    public function edit($id)
    {
        $fee = Fee::findOrFail($id);
        return view('fees.edit', compact('fee'));
    }

    // Edit new record method //
    public function editRecord(Request $request, $id)
    {

        $request->validate([
            'total_fee' => 'required',
            'paid_amount' => 'required',
        ]);
        $fee = Fee::findOrFail($id);
        $fee->total_fee = $request->total_fee;
        $fee->paid_amount   = $request->paid_amount;
        $fee->remaining_amount  = $request->total_fee - $request->paid_amount;
        $fee->payment_method  = $request->payment_method;
        $fee->transaction_id  = $request->transaction_id;
        $fee->payment_date   = $request->payment_date;
        // Auto Save //
        if ($fee->remaining_amount <= 0) {
            $fee->status = 'Paid';
        } elseif ($fee->paid_amount > 0) {
            $fee->status = "Partial";
        } else {
            $fee->status = 'Pending';
        }

        $fee->save();

        return redirect()
            ->route('fees.index')
            ->with('success', 'Fee Record Updated Successfully');
    }

    public function deleteRecord($id)
    {
        $fee = Fee::findOrFail($id);
        $fee->delete();
        return redirect()->route('fees.index')->with('success', 'Fee Record Deleted Successfully');
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
        $students = User::where('role', 'student')->orderBy('id', 'DESC')->get();

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

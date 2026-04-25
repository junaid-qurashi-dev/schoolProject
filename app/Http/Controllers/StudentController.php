<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index()
    {
        return view('pages.students');
    }
    function StudentsAll()
    {
        return view('main.studentinfo');
    }
    function StudentsTab()
    {
        return view('main.studentview');
    }
    function AddStudents()
    {
        $lastRoll = DB::table('students')->max('roll_number');

        // Next roll
        $nextRoll = $lastRoll ? $lastRoll + 1 : 1;

        return view('main.addstudent', compact('nextRoll'));
    }
    function EditStudent()
    {
        return view('main.editstudent');
    }

    // Add Student
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'class' => 'required'
        ]);

        // 🔥 Class-wise roll
        $lastRoll = DB::table('students')
            ->where('class', $request->class)
            ->max('roll_number');

        $newRoll = $lastRoll ? $lastRoll + 1 : 1;

        $photoname = null;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $photoname = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $photoname);
        }

        DB::table('students')->insert([
            'roll_number' => $newRoll,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'class' => $request->class,
            'photo' => $photoname,
            'admission_date' => $request->admission_date,
            'address' => $request->address,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Student Added Successfully');
    }
}

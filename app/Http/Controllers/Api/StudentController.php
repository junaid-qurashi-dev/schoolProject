<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        return Student::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->dob = $request->dob;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->class = $request->class;
        $student->section = $request->section;
        $student->admission_date = $request->admission_date;
        $student->address = $request->address;

        $student->save();

        return response()->json([
            'message' => 'Student added successfully',
            'data' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->dob = $request->dob;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->class = $request->class;
        $student->section = $request->section;
        $student->admission_date = $request->admission_date;
        $student->address = $request->address;
        if ($student->save()) {
            return ["result" => "Student updated Successfully"];
        } else {
            return ["resutl" => "student not updated"];
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $student  = Student::destroy($id);
        if ($student) {
            return ['result' => "Student record deleted"];
        } else {
            return ['result' => "student record not delete"];
        }
    }
}

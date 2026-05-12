<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
// use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list($id = null)
    {
        $query = User::where('role', 'student')
            ->select(
                'id',
                'name',
                'email',
                'phone',
                'gender',
                'dob',
                'class',
                'address'
            );

        if (!empty($id)) {

        $student = $query->where('id', $id)->first();
            if (!$student) {
                return response()->json([
                    'status_code'=>404,
                    'status' => false,
                    'message' => 'No Record Found'
                ], 404);
            }

            return response()->json([
                'status_code'=>200,
                'status' => true,
                'data' => $student
            ]);
        }

        return $query->get();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new User();
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->dob = $request->dob;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->class = $request->class;
        // $student->password = $request->password;
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

        $student = User::findOrFail($id);
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->dob = $request->dob;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->class = $request->class;
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
        $student  = User::destroy($id);
        if ($student) {
            return ['result' => "Student record deleted"];
        } else {
            return ['result' => "student record not delete"];
        }
    }
}

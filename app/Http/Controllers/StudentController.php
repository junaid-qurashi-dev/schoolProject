<?php

namespace App\Http\Controllers;

// use App\Models\Student;
// use App\Models\ParentModel;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // 📌 Students list
   function index()
{
    $students = User::where('role', 'student')
                    ->latest()
                    ->get();

    return view('pages.students', compact('students'));
}

    // 📌 View single student
    function StudentView($id)
    {
        $student = User::findOrFail($id);
        return view('main.StudentView', compact('student'));
    }

    // 📌 Add form
    function AddStudents()
    {
        return view('main.addstudent');
    }

    function EditStudent($id)
    {
        $student = User::findOrFail($id);
        return view('main.editstudent', compact('student'));
    }

    function update(Request $request, $id)
    {
        $student = User::findOrFail($id);


        // ✅ Student update
        $student->update([
           'name' => $request->name,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'email' => $request->email,
                'phone' => $request->phone,
                'class' => $request->class,
                'address' => $request->address,
        ]);


        return redirect()->back()->with('success', 'Student Updated Successfully!');
    }



    // 🔥 STORE METHOD (MAIN LOGIC)

    public function store(Request $request)
    {

        try {

            $request->validate([
                'name' => 'required',
                'gender' => 'required',
                'dob' => 'required'
            ]);
            // 🔥 STEP 2: CREATE STUDENT
            User::create([
                'name' => $request->name,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'password'=> $request->password,
                'email' => $request->email,
                'phone' => $request->phone,
                'class' => $request->class,
                'address' => $request->address,
                'role' => 'student',
            ]);

            // ✅ SUCCESS
            return redirect()->back()->with('success', 'Student  Added Successfully ✅');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function DeleteStudent($id)
    {
        $student = User::destroy($id);
        if ($student) {
            return redirect()->back()->with('success', 'Student Delete Successfully ✅');
        } else {
            return redirect()->back()->with('success', 'Student Not Delete ✅');
        }
    }
}

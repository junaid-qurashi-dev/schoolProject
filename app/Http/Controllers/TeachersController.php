<?php

namespace App\Http\Controllers;

// use App\Models\ClassModel;
// use App\Models\Subject;
// use App\Models\Teacher;
// use App\Models\Timetable;
use App\Models\User;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
   function index()
{
    $teachers = User::where('role', 'teacher')
                    ->latest()
                    ->get();

    return view('pages.teachers', compact('teachers'));
}
    public function teacherview($id)
    {
        $teacher = User::findOrFail($id);

        return view('teachers.teacherview', compact('teacher'));
    }
    function addteacher()
    {
        return view('teachers.addteacher');
    }

    public function teacherstore(Request $request)
    {
        try {

            // ✅ VALIDATION
            $request->validate([
                'tname' => 'required',
                'tgender' => 'required',
                'temail' => 'nullable|email',
            ]);



            // 🔥 STEP 2: CREATE Teacher
            User::create([
                'name' => $request->tname,
                'gender' => $request->tgender,
                'dob' => $request->tdob,
                'password' => $request->tpassword,
                'email' => $request->temail,
                'phone' => $request->tphone,
                'subject' => $request->tsubject,
                'salary' => $request->tsalary,
                'experience' => $request->texperience,
                'qualification' => $request->tqualification,
                 'role' => 'teacher',
                'address' => $request->taddress,
            ]);
            // ✅ SUCCESS
            return redirect()->back()->with('success', 'Teacher Added Successfully ');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }


    function editteacher($id)
{
    $teachers = User::findOrFail($id);

    return view('teachers.editteacher', compact('teachers'));
}

function updateTeacher(Request $request, $id)
{
    $teachers = User::findOrFail($id);

    $teachers->update([

        'name' => $request->teachername,

        'gender' => $request->teachergender,

        'dob' => $request->teacherdob,

        'email' => $request->teacheremail,

        'phone' => $request->teacherphone,

        'subject' => $request->teachersubject,

        'salary' => $request->teachersalary,

        'experience' => $request->teacherexperience,

        'qualification' => $request->teacherqualification,

        'joining_date' => $request->teacherjoining_date ?? now(),

        'address' => $request->teacheraddress,

    ]);

    return redirect()->back()->with('success', 'Teacher Updated Successfully');
}

public function teacherdelete($id){
$teacher = User::destroy($id);
if($teacher){
    return redirect()->back()->with('success','Teacher Deleted Successfully!');
}else{
    return redirect()->back()->with('error','Teacher not found');
}
}
}

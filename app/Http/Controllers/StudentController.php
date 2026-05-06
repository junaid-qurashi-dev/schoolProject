<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ParentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // 📌 Students list
    function index()
    {
        $students = Student::latest()->get();
        return view('pages.students', compact('students'));
    }

    // 📌 View single student
    function StudentView($id)
    {
        $student = Student::with('parent')->findOrFail($id);
        return view('main.StudentView', compact('student'));
    }

    // 📌 Add form
    function AddStudents()
    {
        return view('main.addstudent');
    }

    function EditStudent($id)
    {
        $student = Student::with('parent')->findOrFail($id);
        return view('main.editstudent', compact('student'));
    }

    function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);


        // ✅ Student update
        $student->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'email' => $request->email,
            'phone' => $request->phone,
            'class' => $request->class,
            'section' => $request->section,
            'admission_date' => $request->admission_date,
            'address' => $request->address,
        ]);


        return redirect()->back()->with('success', 'Student Updated Successfully!');
    }



    // 🔥 STORE METHOD (MAIN LOGIC)

    public function store(Request $request)
    {

        try {

            // ✅ VALIDATION
            $request->validate([
                'name' => 'required',
                'gender' => 'required',
                'dob' => 'nullable|date',
                'email' => 'nullable|email',
                'phone' => 'nullable',
                'class' => 'required',
                'section' => 'required',
                'admission_date' => 'nullable|date',
                'address' => 'nullable',

                // 👇 Parent fields
                'father_name' => 'required',
                'mother_name' => 'nullable',
                'parent_phone' => 'nullable',
                'parent_email' => 'nullable|email',
                'occupation' => 'nullable',
                'religion' => 'nullable',
            ]);

            // ✅ STUDENT PHOTO
            $studentPhoto = null;
            if ($request->hasFile('photo')) {
                $studentPhoto = $request->file('photo')->store('students', 'public');
            }

            // ✅ PARENT PHOTO
            $parentPhoto = null;
            if ($request->hasFile('parent_photo')) {
                $parentPhoto = $request->file('parent_photo')->store('parents', 'public');
            }

            // 🔥 STEP 1: CREATE PARENT
            $parent = ParentModel::create([
                'parent_code' => 'P-' . rand(10000, 99999),
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'photo' => $parentPhoto,
                'occupation' => $request->occupation,
                'religion' => $request->religion,
                'email' => $request->parent_email,
                'phone' => $request->parent_phone,
                'address' => $request->address,
                'admission_date' => $request->admission_date,
            ]);

            // 🔥 STEP 2: CREATE STUDENT
            Student::create([
                'name' => $request->name,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'email' => $request->email,
                'phone' => $request->phone,
                'class' => $request->class,
                'section' => $request->section,
                'photo' => $studentPhoto,
                'admission_date' => $request->admission_date,
                'parent_id' => $parent->id,
                'address' => $request->address,
            ]);

            // ✅ SUCCESS
            return redirect()->back()->with('success', 'Student + Parent Added Successfully ✅');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function DeleteStudent($id)
    {
        $student = Student::destroy($id);
        if ($student) {
            return redirect()->back()->with('success', 'Student Delete Successfully ✅');
        } else {
            return redirect()->back()->with('success', 'Student Not Delete ✅');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Timetable;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    function index()
    {
        $teachers = Teacher::latest()->get();
        return view('pages.teachers', compact('teachers'));
    }
    public function teacherview($id)
    {
        $teacher = Teacher::with(['classes.timetables.subject'])
            ->findOrFail($id);

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

            // ✅ Teacher PHOTO
            $teacherPhoto = null;
            if ($request->hasFile('tphoto')) {
                $teacherPhoto = $request->file('tphoto')->store('teacher', 'public');
            }

            // 🔥 STEP 2: CREATE Teacher
            Teacher::create([
                'name' => $request->tname,
                'gender' => $request->tgender,
                'dob' => $request->tdob,
                'email' => $request->temail,
                'phone' => $request->tphone,
                'salary' => $request->salary, // ✅ FIX
                'experience' => $request->experience, // ✅ FIX
                'user_id' => $request->user_id,
                'photo' => $teacherPhoto,
                'joining_date' => $request->joining_date ?? now(),
                'address' => $request->address, // ✅ FIX
            ]);
            // ✅ SUCCESS
            return redirect()->back()->with('success', 'Teacher Added Successfully ✅');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    function editteacher()
    {
        return view('teachers.editteacher');
    }
}

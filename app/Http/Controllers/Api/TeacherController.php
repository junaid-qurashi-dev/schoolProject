<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function list()
    {
        return Teacher::all();
    }

    public function store(Request $request)
    {
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->dob = $request->dob;
        $teacher->gender = $request->gender;
        $teacher->joining_date = $request->joining_date;
        $teacher->qualification = $request->qualification;
        $teacher->experience = $request->experience;
        $teacher->salary = $request->salary;
        $teacher->photo = $request->photo;
        $teacher->address = $request->address;
        $teacher->save();
        return response()->json([
            'message' => 'Student added successfully',
            'data' => $teacher
        ]);
    }

    public function update(Request $request,$id){
        $teacher = Teacher::findOrFail($id);
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->dob = $request->dob;
        $teacher->gender = $request->gender;
        $teacher->joining_date = $request->joining_date;
        $teacher->qualification = $request->qualification;
        $teacher->experience = $request->experience;
        $teacher->salary = $request->salary;
        $teacher->photo = $request->photo;
        $teacher->address = $request->address;
        $teacher->save();
        return response()->json([
            'message'=>"Teacher Upadated Successfully"
        ]);
    }
    public function delete($id){
        $teacher = Teacher::destroy($id);
        if($teacher){
            return response()->json([
                "message"=>"Teacher Deleted Successfully"
            ]);
        }else{
            return response()->json([
                "message"=>"Teacher Not Found"
            ]);
        }
    }

}

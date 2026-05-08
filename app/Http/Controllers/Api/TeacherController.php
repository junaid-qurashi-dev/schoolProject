<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
// use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function list()
{
    return User::where('role','teacher')
        ->select(
            'id',
            'name',
            'email',
            'phone',
            'gender',
            'dob',
            'subject',
            'qualification',
            'salary',
            'experience',
            'address'
        )
        ->latest()
        ->get();
}

    public function store(Request $request)
    {
        $teacher = new User();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->dob = $request->dob;
        $teacher->gender = $request->gender;
        $teacher->qualification = $request->qualification;
        $teacher->experience = $request->experience;
        $teacher->salary = $request->salary;
        $teacher->address = $request->address;
        $teacher->save();
        return response()->json([
            'message' => 'Student added successfully',
            'data' => $teacher
        ]);
    }

    public function update(Request $request,$id){
        $teacher = User::findOrFail($id);
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->dob = $request->dob;
        $teacher->gender = $request->gender;
        $teacher->qualification = $request->qualification;
        $teacher->experience = $request->experience;
        $teacher->salary = $request->salary;
        $teacher->address = $request->address;
        $teacher->save();
        return response()->json([
            'message'=>"Teacher Upadated Successfully"
        ]);
    }
    public function delete($id){
        $teacher = User::destroy($id);
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

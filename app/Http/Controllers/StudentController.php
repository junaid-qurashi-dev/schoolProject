<?php

namespace App\Http\Controllers;

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
}

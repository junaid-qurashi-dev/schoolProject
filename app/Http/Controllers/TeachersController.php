<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    function index()
    {
        return view('pages.teachers');
    }
    function teacherview()
    {
        return view('teachers.teacherview');
    }
    function addteacher()
    {
        return view('teachers.addteacher');
    }
    function editteacher()
    {
        return view('teachers.editteacher');
    }
}

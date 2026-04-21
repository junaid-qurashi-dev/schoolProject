<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    function index()
    {
        return view('pages.teachers');
    }
}

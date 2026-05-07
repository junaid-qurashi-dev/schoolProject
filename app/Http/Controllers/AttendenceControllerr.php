<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendenceControllerr extends Controller
{
    public function index()
    {
        return view('attendance.att');
    }
}

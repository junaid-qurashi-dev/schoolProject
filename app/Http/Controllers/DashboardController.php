<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        return view('pages.dashboard');
    }


     function customers()
    {
        return view('pages.customers');
    }
}

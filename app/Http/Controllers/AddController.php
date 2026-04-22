<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    function AddNew()
    {
        return view('pages.addnew');
    }
}

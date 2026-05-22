<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function index()
    {
        $feeses = Fee::with('student')->latest()->get();

        return view('fees.list', compact('feeses'));
    }
}

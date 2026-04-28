<?php

namespace App\Http\Controllers;

use App\Models\ParentModel;
use Illuminate\Http\Request;

class ParentController extends Controller
{

    public function index()
    {
        return view('pages.parents');
    }
    public function store(Request $request)
    {
        // ✅ Parent create
        $parent = ParentModel::create([
            'parent_code' => 'P-' . rand(10000, 99999),
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'occupation' => $request->occupation,
            'religion' => $request->religion,
            'email' => $request->parent_email,
            'phone' => $request->parent_phone,
            'address' => $request->address,
            'admission_date' => $request->admission_date,
        ]);
    }
}

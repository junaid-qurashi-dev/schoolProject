<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $account = Account::where('email', $request->email)->first();
        if (!$account || !Hash::check($request->password, $account->password)) {
            return response()->json([
                'status' => false,
                'msg' => 'Invalid Credentials'
            ], 401);
        }
        $token = $account->createToken('school-api')->plainTextToken;
        return response()->json([
            'status' => true,
            'token' => $token,
            'user' => $account,
            'msg' =>    'User Login Successfully'
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'status' => true,
            'message' => 'Logout Successfully'
        ]);
    }
}

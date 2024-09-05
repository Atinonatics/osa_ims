<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); 
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'StudentID' => 'required|string',
            'password' => 'required|string',
        ]);


        return redirect()->route('organizations'); 
    }
}

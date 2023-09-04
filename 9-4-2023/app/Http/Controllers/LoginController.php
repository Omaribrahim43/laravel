<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'username' => ['required', 'alpha', 'min:6', 'max:10'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);
        return $request;
    }
}

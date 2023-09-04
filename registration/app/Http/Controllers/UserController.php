<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => ['required', 'alpha', 'min:6'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);

        $user = new User();

        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();

        return redirect('login');
    }
}

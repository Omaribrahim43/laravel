<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function handlelogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        // Query the database to check if the user with the given email exists
        $user = DB::table('users')->where('email', $email)->first();

        if ($user) {
            // Check if the provided password matches the hashed password in the database
            if (Hash::check($password, $user->password)) {
                // Authentication was successful
                return redirect('/');
            }
        }

        // Authentication failed
        return redirect()->back()->with('error', 'Invalid credentials');
    }
}

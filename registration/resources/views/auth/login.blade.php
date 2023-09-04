@extends('auth.layouts.master')
@section('content')
    <div class="title">
        Login Form
    </div>
    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div class="field">
            <input type="text" name="email" required>
            <label>Email Address</label>
        </div>
        <div class="field">
            <input type="password" name="password" required>
            <label>Password</label>
        </div>
        <div class="content">
            <div class="checkbox">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            <div class="pass-link">
                <a href="#">Forgot password?</a>
            </div>
        </div>
        <div class="field">
            <input type="submit" value="Login">
        </div>
        <div class="signup-link">
            Not a member? <a href="#">Signup now</a>
        </div>
    </form>
@endsection

@extends('auth.layouts.master')
@section('content')
    <div class="title">
        Sign Up Form
    </div>
    <form action="{{ route('signup.submit') }}" method="POST">
        @csrf
        <div class="field">
            <input type="text" name="username">
            <label>Username</label>
        </div>
        <div class="field">
            <input type="text" name="email">
            <label>Email Address</label>
        </div>
        <div class="field">
            <input type="password" name="password">
            <label>Password</label>
        </div>
        <div class="field">
            <input type="password" name="repeat-password">
            <label>Confirm Password</label>
        </div>
        <div class="field">
            <input type="submit" value="Sign Up">
        </div>
        <div class="signup-link">
            Already a member? <a href="#">Login now</a>
        </div>
    </form>
@endsection

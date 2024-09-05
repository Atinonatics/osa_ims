@extends('layouts.LoginPage')

@section('title', 'Login')

@section('content')
<div class="login-background">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg rounded-4">
            <div class="card-header bg-primary text-white text-center py-4">
                <h1 class="mb-0">OSA-IMS</h1>
            </div>
            <div class="card-body p-5">
                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="StudentID" class="form-label">Student ID</label>
                        <input type="text" class="form-control form-control-lg" id="StudentID" name="StudentID" placeholder="Enter your Student ID" required autofocus>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

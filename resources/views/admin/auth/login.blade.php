@extends('admin.auth.layouts.auth-master')
@section('title','Admin Login')
@section('content')
<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <a href="{{route('index')}}">
                <img class="img-fluid logo-dark mb-2" src="{{asset('assets/admin/img/logo-01.png')}}" alt="Logo">
            </a>
            <div class="loginbox">
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Welcome Back</h1>
                        <form method="POST" action="{{route('admin.login')}}">
                            @csrf
                            <div class="form-group form-focus">
                                <input type="email" name="email" class="form-control floating" required>
                                <label class="focus-label">Email</label>
                            </div>
                            @error('email')
                                <span class="mt-3 mb-3 text-danger">{{$message}}</span>
                            @enderror
                            <div class="form-group form-focus">
                                <input type="password" name="password" class="form-control floating" required>
                                <label class="focus-label">Password</label>
                            </div>
                            <div class="form-group">
                                <label class="custom_check">
                                    <input type="checkbox" name="rem_password">
                                    <span class="checkmark"></span> Remember password
                                </label>
                            </div>
                            <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                            <div class="row form-row login-foot">
                                <div class="col-lg-6 login-forgot">
                                    <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
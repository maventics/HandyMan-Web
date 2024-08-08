@extends('webistecontent.layout')
@section('title','register')
@section('body', 'account-page')

@section('content')
<div class="login-wrapper">
  <div class="content w-100">
  
  <div class="account-content">
  <div class="align-items-center justify-content-center">
  <div class="login-right">
  <div class="login-header text-center">
  <a href="index.html"><img src="assets/img/logo.svg" alt="logo" class="img-fluid"></a>
  <h3>We love to see you joining our community</h3>
  </div>
  <nav class="user-tabs mb-4">
  <ul role="tablist" class="nav nav-pills nav-justified">
  <li class="nav-item">
  <a href="#developer" data-bs-toggle="tab" class="nav-link active">Freelancer</a>
  </li>
  <li class="nav-item">
  <a href="#company" data-bs-toggle="tab" class="nav-link">Company</a>
  </li>
  </ul>
  </nav>
  <div class="tab-content pt-0">
  <div role="tabpanel" id="developer" class="tab-pane fade active show">
  <form action="https://kofejob.dreamstechnologies.com/html/template/onboard-screen.html">
  <div class="input-block ">
  <label class="focus-label">User Name <span class="label-star"> *</span></label>
  <input type="email" class="form-control floating">
  </div>
  <div class="input-block ">
  <label class="focus-label">Email Address<span class="label-star"> *</span></label>
  <input type="email" class="form-control floating">
  </div>
  <div class="input-block ">
  <label class="focus-label">Password <span class="label-star"> *</span></label>
  <div class="position-relative">
  <input type="password" class="form-control floating pass-input">
  <div class="password-icon ">
  <span class="fas toggle-password fa-eye-slash"></span>
  </div>
  </div>
  </div>
  <div class="input-block  mb-0">
  <label class="focus-label">Confirm Password <span class="label-star"> *</span></label>
  <div class="position-relative">
  <input type="password" class="form-control floating pass-inputs">
  <div class="password-icons">
  <span class="fas toggle-passwords fa-eye-slash"></span>
  </div>
  </div>
  </div>
  <div class="dont-have">
  <label class="custom_check">
  <input type="checkbox" name="rem_password">
  <span class="checkmark"></span> I have read and agree to all <a href="privacy-policy.html">Terms &amp; Conditions</a>
  </label>
  </div>
  <button class="btn btn-primary w-100 btn-lg login-btn d-flex align-items-center justify-content-center" type="submit">Sign In Now<i class="feather-arrow-right ms-2"></i></button>
  <div class="login-or">
  <p><span>Or</span></p>
  </div>
  <div class="row social-login">
  <div class="col-sm-4">
  <a href="javascript:void(0);" class="btn btn-block"><img src="assets/img/icon/google-icon.svg" alt="Google">Google</a>
  </div>
  <div class="col-sm-4">
  <a href="javascript:void(0);" class="btn btn-block"><img src="assets/img/icon/fb-icon.svg" alt="Fb">Facebook</a>
  </div>
  <div class="col-sm-4">
  <a href="javascript:void(0);" class="btn btn-block"><img src="assets/img/icon/ios-icon.svg" alt="Apple">Apple</a>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-8 dont-have d-flex  align-items-center">Already have account <a href="login.html" class="ms-2">Sign in?</a></div>
  </div>
  </form>
  </div>
  <div role="tabpanel" id="company" class="tab-pane fade">
  <form action="https://kofejob.dreamstechnologies.com/html/template/onboard-screen.html">
  <div class="input-block ">
  <label class="focus-label">User Name <span class="label-star"> *</span></label>
  <input type="email" class="form-control floating">
  </div>
  <div class="input-block ">
  <label class="focus-label">Email Address<span class="label-star"> *</span></label>
  <input type="email" class="form-control floating">
  </div>
  <div class="input-block ">
  <label class="focus-label">Password <span class="label-star"> *</span></label>
  <div class="position-relative">
  <input type="password" class="form-control floating pass-input">
  <div class="password-icon ">
  <span class="fas toggle-password fa-eye-slash"></span>
  </div>
  </div>
  </div>
  <div class="input-block  mb-0">
  <label class="focus-label">Confirm Password <span class="label-star"> *</span></label>
  <div class="position-relative">
  <input type="password" class="form-control floating pass-inputs">
  <div class="password-icons">
  <span class="fas toggle-passwords fa-eye-slash"></span>
  </div>
  </div>
  </div>
  <div class="dont-have">
  <label class="custom_check">
  <input type="checkbox" name="rem_password">
  <span class="checkmark"></span> I have read and agree to all <a href="privacy-policy.html">Terms &amp; Conditions</a>
  </label>
  </div>
  <button class="btn btn-primary w-100 btn-lg login-btn d-flex align-items-center justify-content-center" type="submit">Sign In Now<i class="feather-arrow-right ms-2"></i></button>
  <div class="login-or">
  <p><span>Or</span></p>
  </div>
  <div class="row social-login">
  <div class="col-sm-4">
  <a href="javascript:void(0);" class="btn btn-block"><img src="assets/img/icon/google-icon.svg" alt="Google">Google</a>
  </div>
  <div class="col-sm-4">
  <a href="javascript:void(0);" class="btn btn-block"><img src="assets/img/icon/fb-icon.svg" alt="Fb">Facebook</a>
  </div>
  <div class="col-sm-4">
  <a href="javascript:void(0);" class="btn btn-block"><img src="assets/img/icon/ios-icon.svg" alt="Apple">Apple</a>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-8 dont-have d-flex  align-items-center">Already have account <a href="login.html" class="ms-2">Sign in?</a></div>
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  </div>
  </div>

@endsection
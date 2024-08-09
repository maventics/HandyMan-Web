@extends('webistecontent.layout')
@section('title','register')
@section('body', 'account-page')
@section('content')



{{-- @if ($message = Session::get('success'))

<div id="successMessage"
    class="alert alert-success alert-dismissible alert-solid alert-label-icon fade show position-fixed top-0 end-0"
    style="z-index: 9999; margin-top: 25px;" role="alert">
    <i class="ri-check-double-line label-icon"></i><strong>{{ $message }}</strong>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if ($message = Session::get('danger'))
<div id="dangerMessage"
    class="alert alert-danger alert-dismissible alert-solid alert-label-icon fade show position-fixed top-0 end-0"
    style="z-index: 9999; margin-top: 25px;" role="alert">
    <i class="ri-error-warning-line label-icon"></i><strong>{{ $message }}</strong>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}

<div class="login-wrapper">
  <div class="content w-100">
  
  <div class="account-content">
  <div class="align-items-center justify-content-center">
  <div class="login-right">
  <div class="login-header text-center">
  <a href="index.html"><h6 style="font-size: 2rem;">HANDY MAN</h6></a>
  <h3>Thank You For Join Our Community</h3>
  </div>
  <nav class="user-tabs mb-4">
  {{-- <ul role="tablist" class="nav nav-pills nav-justified">
  <li class="nav-item">
  <a href="#developer" data-bs-toggle="tab" class="nav-link active">Freelancer</a>
  </li>
  <li class="nav-item">
  <a href="#company" data-bs-toggle="tab" class="nav-link">Company</a>
  </li>
  </ul> --}}
  </nav>
  <div class="tab-content pt-0">
  <div role="tabpanel" id="developer" class="tab-pane fade active show">
  <form action="/register" method="POST"  enctype="multipart/form-data" >
  @csrf
  <div class="input-block ">
  <label class="focus-label">Full Name <span class="label-star">*</span></label>
  <input type="text" name="fullname" placeholder="Enter Your Fullname..." class="form-control floating">
  </div>
  <div class="input-block ">
  <label class="focus-label">Email Address<span class="label-star">*</span></label>
  <input type="email" name="email" placeholder="@gmail.com" class="form-control floating">
  </div>
  <div class="input-block ">
  <label class="focus-label">Phone<span class="label-star">*</span></label>
  <input type="number" name="phone" class="form-control floating">
  </div>
  <div class="input-block ">
    <label class="focus-label">Id Number<span class="label-star">*</span></label>
    <input type="number" name="id_number" class="form-control floating">
  </div>
  <div class="input-block ">
    <label class="focus-label">Profile Image<span class="label-star">*</span></label>
    <input type="file" name="profile_image" class="form-control floating" >
  </div>

  <div class="input-block mt-3">
    <label class="focus-label">Password <span class="label-star"> *</span></label>
    <div class="position-relative">
    <input type="password" name="password" placeholder="***" class="form-control floating pass-input">
    <div class="password-icon ">
    <span class="fas toggle-password fa-eye-slash"></span>
    </div>
    </div>
    </div>


  <div class="input-block">
    <label class="focus-label">Gender<span class="label-star">*</span></label>
    <div class="radio-group">
      <label>
        <input type="radio" name="gender" value="male" >
        Male
      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label>
        <input type="radio" name="gender" value="female" />
        Female
      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label>
        <input type="radio" name="gender" value="other" />
        Other
      </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
  </div>

  <div class="input-block ">
    <label class="focus-label">Legal Address<span class="label-star">*</span></label><br>
    <textarea name="legal_address" id="" cols="50"  class="form-control" placeholder="Please Provide Your Legal Address..!"></textarea>
  </div>

{{--   
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
  </div> --}}
  {{-- <div class="dont-have">
  <label class="custom_check">
  <input type="checkbox" name="rem_password">
  <span class="checkmark"></span> I have read and agree to all <a href="privacy-policy.html">Terms &amp; Conditions</a>
  </label>
  </div> --}}
  {{-- <button class="btn btn-primary w-100 btn-lg login-btn d-flex align-items-center justify-content-center" type="submit">Sign Up<i class="feather-arrow-right ms-2"></i></button> --}}
  <input type="submit" value="Continue" class="btn btn-primary w-100 btn-lg login-btn d-flex align-items-center justify-content-center">
  <div class="login-or">
  <p><span>Or</span></p>
  </div>
  {{-- <div class="row social-login">
  <div class="col-sm-4">
  <a href="javascript:void(0);" class="btn btn-block"><img src="assets/img/icon/google-icon.svg" alt="Google">Google</a>
  </div>
  <div class="col-sm-4">
  <a href="javascript:void(0);" class="btn btn-block"><img src="assets/img/icon/fb-icon.svg" alt="Fb">Facebook</a>
  </div>
  <div class="col-sm-4">
  <a href="javascript:void(0);" class="btn btn-block"><img src="assets/img/icon/ios-icon.svg" alt="Apple">Apple</a>
  </div>
  </div> --}}
  <div class="row" style="margin-top: -30px">
  <div class="col-sm-8 dont-have d-flex  align-items-center">Already have account <a href="login.html" class="ms-2">Sign in?</a></div>
  </div>
  </form>
  </div>
  <div role="tabpanel" id="company" class="tab-pane fade">
  <form action="https://kofejob.dreamstechnologies.com/html/template/onboard-screen.html">
@endsection
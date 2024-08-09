@extends('webistecontent.layout')
@section('title','register2')
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
  </nav>
  <div class="tab-content pt-0">
  <div role="tabpanel" id="developer" class="tab-pane fade active show">
  <form action="/register" method="POST"  enctype="multipart/form-data" >
  @csrf
  <div class="input-block">
    <label class="focus-label">Category<span class="label-star">*</span></label>
      <?php 
      use App\Models\Category;
      $categories = Category::all();
  ?>
  <label for="category_id"></label>
  <select id="category_id" name="category_id" required class="form-control">
      <option value="">Select Category</option>
      @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->category }}</option>
      @endforeach
  </select>

  <div class="input-block">
    <label class="focus-label">SubCategory<span class="label-star">*</span></label>
      <?php 
    //   use App\Models\Category;
    //   $categories = Category::all();
  ?>
  <label for="category_id"></label>
  <select id="category_id" name="category_id" required class="form-control">
      <option value="">Select Category</option>
      @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->category }}</option>
      @endforeach
  </select>

{{-- 
  <div class="input-block ">
    <label class="focus-label">Others <span class="label-star">(Optional)   </span></label><br>
    <textarea name="legal_address" id="" cols="50"  class="form-control" placeholder="Tell us about your category..!"></textarea>
  </div> --}}



  <div class="input-block ">
    <label class="focus-label">About<span class="label-star">(Tell us about yourself)</span></label><br>
    <textarea name="legal_address" id="" cols="50"  class="form-control" placeholder="Please..!"></textarea>
  </div>

  <input type="submit" value="Submit" class="btn btn-primary w-100 btn-lg login-btn d-flex align-items-center justify-content-center">

  </form>
  </div>
  <div role="tabpanel" id="company" class="tab-pane fade">
  <form action="https://kofejob.dreamstechnologies.com/html/template/onboard-screen.html">
@endsection
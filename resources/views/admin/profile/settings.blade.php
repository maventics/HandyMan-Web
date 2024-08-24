@extends('admin.layouts.admin-master')

@section('title','Admin Setting')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="page-title">Settings</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body pt-0">
                                    <div class="card-header">
                                        <h5 class="card-title">Update Basic Details</h5>
                                    </div>
                                    <form  method="POST" action="{{route('admin.profile.update')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="settings-form">
                                            <div class="form-group">
                                                <label>Name <span class="star-red">*</span></label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Name" name="name" required value="{{auth()->user()->name}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Email <span class="star-red">*</span></label>
                                                <input type="text" class="form-control" name="email"
                                                    placeholder="Enter Email" value="{{auth()->user()->email}}">
                                            </div>
                                            <div class="form-group">
                                                <p class="settings-label">Image <span class="star-red">*</span></p>
                                                    <input type="file" name="image" id="file" class="form-control">
                                                <div class="mt-4">
                                                    <img  src="{{ asset('assets/admin/uploads/profile/' . auth()->user()->image) }}" style="width:100px" />
                                                </div>
                                                {{-- <div class="upload-images" id="image-container">
                                                    <img id="uploaded-image" src="{{ asset('assets/admin/uploads/profile/' . auth()->user()->image) }}" alt="Image">
                                                    <a href="javascript:void(0);" class="btn-icon logo-hide-btn" onclick="removeImage()">
                                                        <i class="feather-x-circle"></i>
                                                    </a>
                                                </div> --}}
                                            </div>
                                            
                                            <div class="form-group mb-0">
                                                <div class="settings-btns">
                                                    <button type="submit" class="btn btn-orange">Update</button>
                                                    <button type="submit" class="btn btn-grey">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body pt-0">
                                    <div class="card-header">
                                        <h5 class="card-title">Update Passord</h5>
                                    </div>
                                    <form  method="POST" action="{{route('admin.password.update')}}">
                                        <div class="settings-form">
                                            <div class="form-group">
                                                <label>New Password <span class="star-red">*</span></label>
                                                <input type="password" class="form-control"
                                                    placeholder="Enter New Password" name="password" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password <span class="star-red">*</span></label>
                                                <input type="password" class="form-control" name="password_confirmation"
                                                    placeholder="Enter Confirm Password" required>
                                            </div>
                                            
                                            
                                            <div class="form-group mb-0">
                                                <div class="settings-btns">
                                                    <button type="submit" class="btn btn-orange">Update</button>
                                                    <button type="submit" class="btn btn-grey">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    function loadFile(event) 
    {
        const imageContainer = document.getElementById('image-container');
        const uploadedImage = document.getElementById('uploaded-image');

        uploadedImage.src = URL.createObjectURL(event.target.files[0]);
        uploadedImage.onload = function() {
            URL.revokeObjectURL(uploadedImage.src) // Free memory
        }

        imageContainer.style.display = 'block';
    }

    function removeImage() 
    {
        const uploadedImage = document.getElementById('uploaded-image');
        const fileInput = document.getElementById('file');

        // Clear the image source and the file input
        uploadedImage.src = '';
        fileInput.value = '';

        // Optionally, you can hide the image container or just the image if you want to allow uploading another image
        uploadedImage.style.display = 'none';
    }

    </script>
@endpush
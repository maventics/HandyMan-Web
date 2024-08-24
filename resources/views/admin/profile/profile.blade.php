@extends('admin.layouts.admin-master')

@section('title','Admin Profile')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header mb-5">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Admin Profile</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body pt-0">
                            <div class="card-header mb-4">
                                <h5 class="card-title d-flex justify-content-between">
                                    <span>Profile</span>
                                    <a class="btn btn-sm btn-white" href="{{route('admin.settings')}}">Edit</a>
                                </h5>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="py-0">
                                    <small class="text-dark">About</small>
                                </li>
                                <li>
                                    {{auth()->user()->name}}
                                </li>
                                <li>
                                    {{auth()->user()->role}}
                                </li>
                                <li class="pt-2 pb-0">
                                    <small class="text-dark">Contacts</small>
                                </li>
                                <li>
                                    {{auth()->user()->email}}

                                </li>
                                <li class="pt-2 pb-0">
                                    <small class="text-dark">Address</small>
                                </li>
                                <li>
                                    359 Coal Road<br>
                                    Plains, PA 18705
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center mb-5 profile-cover mt-5">
                        <label class="avatar avatar-xxl profile-cover-avatar" for="avatar_upload">
                            <img class="avatar-img" src="{{asset('assets/admin/img/profiles/avatar-07.jpg')}}" alt="Profile Image">
                            <input type="file" id="avatar_upload">
                            <span class="avatar-edit">
                                <i data-feather="edit-2" class="avatar-uploader-icon shadow-soft"></i>
                            </span>
                        </label>
                        <h2>{{auth()->user()->name}} <i class="fas fa-certificate text-primary small" data-bs-toggle="tooltip"
                                data-placement="top" title data-original-title="Verified"></i></h2>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="far fa-calendar-alt"></i> <span>{{auth()->user()->created_at->format('d-M-Y')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>

               
            </div>
        </div>
    </div>

@endsection

   
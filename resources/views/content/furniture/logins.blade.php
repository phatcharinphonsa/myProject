@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/contentLayoutMaster')

@section('title', 'Login Cover - Pages')

@section('vendor-style')
<!-- Vendor -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-auth.js')}}"></script>
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row">
        <!-- /Left Text -->
        <div class="d-none d-lg-flex col-lg-7 p-0">
            <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/img/logo/Minimal-'.$configData['style'].'.png') }}" alt="auth-login-cover"
                    class="img-fluid my-5 auth-illustration " data-app-light-img="illustrations/Minimal.png"
                    data-app-dark-img="illustrations/Minimal.png">
            </div>
        </div>
        <!-- /Left Text -->

        <!-- Login -->
        <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
            <div class="w-px-400 mx-auto">
                <!-- Logo -->
                <div class="app-brand mb-2 justify-content-center">
                    <a href="#" class="app-brand-link gap-2">
                        <img class="img-fluid rounded mb-3 pt-1 mt-4 "
                            src="{{ asset('assets/img/avatars/furicon.png') }}" width="250" alt="furniture icon" />
                    </a>
                </div>
                <!-- /Logo -->

                <form id="formAuthentication" class="mb-3" action="{{url('/')}}" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">ชื่อผู้ใช้</label>
                        <input type="text" class="form-control" id="email" name="email-username" autofocus>
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">รหัสผ่าน</label>

                        </div>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="password"
                                aria-describedby="password" />
                            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                        </div>
                    </div>

                    <button class="btn btn-primary d-grid w-100">
                        เข้าสู่ระบบ
                    </button>
                </form>

                <p class="text-center">
                    <span>ยังไม่มีบัญชีผู้ใช้?</span>
                    <a href="{{url('auth/register-cover')}}">
                        <span>ลงทะเบียน</span>
                    </a>
                </p>


            </div>
        </div>
        <!-- /Login -->
    </div>
</div>
@endsection
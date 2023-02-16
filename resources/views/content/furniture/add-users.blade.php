@extends('layouts/contentLayoutMaster')

@section('title', ' Vertical Layouts - Forms')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-layouts.js')}}"></script>
@endsection

@section('content')

<!-- Multi Column with Form Separator -->
<div class="card mb-4">
    <h5 class="card-header">แบบฟอร์มเพิ่มข้อมูลผู้ใช้งาน</h5>
    <form class="card-body">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label" for="multicol-username">ชื่อผู้ใช้</label>
                <input type="text" id="multicol-username" class="form-control" required />
            </div>
            <div class="col-md-6">
                <label class="form-label" for="multicol-email">อีเมลล์</label>
                <input type="text" id="multicol-username" class="form-control" required />
            </div>
            <div class="col-md-6">
                <label class="form-label" for="multicol-email">รหัสผ่าน</label>
                <input type="text" id="multicol-username" class="form-control" required />
            </div>
            <div class="col-md-6">
                <label class="form-label" for="multicol-phone">เบอร์โทรศัพท์</label>
                <input type="text" id="multicol-phone" class="form-control phone-mask" required />
            </div>
            <div class="col-md-6">
                <label class="form-label" for="bs-validation-bio">ที่อยู่</label>
                <textarea class="form-control" id="bs-validation-bio" name="bs-validation-bio" rows="2"
                    required></textarea>
            </div>
            <div class="col-md-6">
                <label class="form-label">สถานะ</label>
                <div class="form-check custom mb-2">
                    <input type="radio" id="formValidationGender" name="formValidationGender"
                        class="form-check-input" />
                    <label class="form-check-label" for="formValidationGender">เจ้าของกิจการ</label>
                </div>

                <div class="form-check custom">
                    <input type="radio" id="formValidationGender2" name="formValidationGender"
                        class="form-check-input" />
                    <label class="form-check-label" for="formValidationGender2">พนักงาน</label>
                </div>
            </div>
        </div>
        <div class="pt-4 mt-3 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">บันทึก</button>
            <button type="reset" class="btn btn-label-secondary">ยกเลิก</button>
        </div>
    </form>
</div>
@endsection
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
                <input type="text" id="multicol-username" class="form-control" />
            </div>
            <div class="col-md-6">
                <label class="form-label" for="multicol-email">อีเมลล์</label>
                <div class="input-group input-group-merge">
                    <input type="text" id="multicol-email" class="form-control" aria-describedby="multicol-email2" />

                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="multicol-password">รหัสผ่าน</label>
                <div class="input-group input-group-merge">
                    <input type="password" id="multicol-password" class="form-control"
                        aria-describedby="multicol-password2" />
                    <span class="input-group-text cursor-pointer" id="multicol-password2"><i
                            class="ti ti-eye-off"></i></span>
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="multicol-phone">เบอร์โทรศัพท์</label>
                <input type="text" id="multicol-phone" class="form-control phone-mask" />
            </div>
            <div class="col-md-6">
                <label class="form-label" for="multicol-username">ที่อยู่</label>
                <input type="text" id="multicol-username" class="form-control" />
            </div>
            <div class="col-md-6">
                <label class="form-check-label">สถานะ</label>
                <div class="col mt-2">
                    <div class="form-check form-check-inline">
                        <input name="collapsible-address-type" class="form-check-input" type="radio" value=""
                            id="collapsible-address-type-home" checked="" />
                        <label class="form-check-label" for="collapsible-address-type-home">เจ้าของกิจการ</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="collapsible-address-type" class="form-check-input" type="radio" value=""
                            id="collapsible-address-type-office" />
                        <label class="form-check-label" for="collapsible-address-type-office">พนักงาน</label>
                    </div>
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
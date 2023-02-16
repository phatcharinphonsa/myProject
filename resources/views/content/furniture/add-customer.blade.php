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
    <h5 class="card-header">แบบฟอร์มเพิ่มข้อมูลลูกค้า</h5>
    <form class="card-body">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label" for="multicol-username">รหัสลูกค้า</label>
                <input type="text" id="multicol-username" class="form-control" />
            </div>
            <div class="col-md-6">
                <label class="form-label" for="multicol-email">ชื่อลูกค้า</label>
                <input type="text" id="multicol-username" class="form-control" />
            </div>
            <div class="col-md-6">
                <label class="form-label" for="multicol-phone">เบอร์โทรศัพท์</label>
                <input type="text" id="multicol-phone" class="form-control phone-mask" />
            </div>
            <div class="col-md-6">
                <label class="form-label" for="multicol-username">ที่อยู่</label>
                <input type="text" id="multicol-username" class="form-control" />
            </div>

        </div>
        <div class="pt-4 mt-3 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">บันทึก</button>
            <button type="reset" class="btn btn-label-secondary">ยกเลิก</button>
        </div>
    </form>
</div>
@endsection
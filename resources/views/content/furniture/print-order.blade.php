@extends('layouts/contentLayoutMaster')

@section('title', 'Invoice (Print version) - Pages')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/app-invoice-print.css')}}" />
@endsection

@section('page-script')
<script src="{{asset('assets/js/app-invoice-print.js')}}"></script>
@endsection

@section('content')
<div class="invoice-print p-5">
    <div class="d-flex justify-content-between flex-row">
        <div class="mb-4">
            <div class="d-flex svg-illustration mb-3 gap-2">
                <img class="img-fluid rounded " src="{{ asset('assets/img/avatars/furicon.png') }}" width="150"
                    alt="furniture icon" />
            </div>
            <p class="mb-1">บริษัท ยิ่งเจริญ อินทีเรีย จำกัด</p>
            <p class="mb-1">1079 หมู่ที่ 1 ตำบลชุมแพ อำเภอชุมแพ จังหวัดขอนแก่น 40130</p>
            <p class="mb-1">โทร. 04-331-1265</p>
        </div>
        <div>
            <h4 class="fw-bold">เลขที่ใบสั่งซื้อ #86423</h4>
            <div class="mb-2">
                <span class="text-muted">วันที่สั่งซื้อ:</span>
                <span class="fw-bold">April 25, 2021</span>
            </div>
            <div>
                <span class="text-muted">รหัสตัวแทน:</span>
                <span class="fw-bold">#86423</span>
            </div>
        </div>
    </div>
    <hr />
    <div class="table-responsive">
        <table class="table m-0">
            <thead class="table-light">
                <tr>
                    <th>เลขที่</th>
                    <th>รายการสั่งซื้อ</th>
                    <th>จำนวน</th>
                    <th>ราคา/หน่วย</th>
                    <th>จำนวนเงิน</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Vuexy Admin Template</td>
                    <td>HTML Admin Template</td>
                    <td>$32</td>
                    <td>1</td>
                    <td>$32.00</td>
                </tr>
                <tr>
                    <td colspan="3" class="align-top px-4 py-3">
                    </td>
                    <td class="text-end px-4 py-3">
                        <p class="mb-2">รวมเป็นเงิน:</p>
                        <p class="mb-2">ภาษี:</p>
                        <p class="mb-0">รวมทั้งสิ้น:</p>
                    </td>
                    <td class="px-4 py-3">
                        <p class="fw-bold mb-2">$154.25</p>
                        <p class="fw-bold mb-2">$50.00</p>
                        <p class="fw-bold mb-0">$204.25</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
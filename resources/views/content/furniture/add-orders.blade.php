@extends('layouts/contentLayoutMaster')

@section('title', 'Add - Invoice')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/app-invoice.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/offcanvas-send-invoice.js')}}"></script>
<script src="{{asset('assets/js/app-invoice-add.js')}}"></script>
@endsection

@section('content')
<div class="row invoice-add">
    <!-- Invoice Add-->
    <div class="col-lg-9 col-12 mb-lg-0 mb-4">
        <div class="card invoice-preview-card">
            <div class="card-body">
                <div class="row m-sm-4 m-0">
                    <div class="col-md-7 mb-md-0 mb-4 ps-0">
                        <div class="d-flex svg-illustration mb-4 gap-2 align-items-center">
                            <img class="img-fluid rounded " src="{{ asset('assets/img/avatars/furicon.png') }}"
                                width="150" alt="furniture icon" />
                        </div>
                        <p class="mb-1">บริษัท ยิ่งเจริญ อินทีเรีย จำกัด</p>
                        <p class="mb-1">1079 หมู่ที่ 1 ตำบลชุมแพ อำเภอชุมแพ จังหวัดขอนแก่น 40130</p>
                        <p class="mb-1">โทร. 04-331-1265</p>
                    </div>
                    <div class="col-md-5">
                        <dl class="row mb-2">
                            <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                                <span class="h5 text-capitalize mb-0 text-nowrap">เลขที่ใบสั่งซื้อ</span>
                            </dt>
                            <dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
                                <div class="input-group input-group-merge disabled w-px-150">
                                    <span class="input-group-text">#</span>
                                    <input type="text" class="form-control" disabled placeholder="3905" value="3905"
                                        id="invoiceId" />
                                </div>
                            </dd>
                            <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                                <span class="fw-normal">วันที่สั่งซื้อ :</span>
                            </dt>
                            <dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
                                <input type="text" class="form-control w-px-150 date-picker" placeholder="YYYY-MM-DD" />
                            </dd>
                            <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                                <span class="fw-normal">รหัสตัวแทน :</span>
                            </dt>
                            <dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
                                <input type="text" class="form-control w-px-150 " />
                            </dd>
                        </dl>
                    </div>
                </div>

                <hr class="my-3 mx-n4" />
                <form class="source-item pt-4 px-0 px-sm-4">
                    <div class="mb-3" data-repeater-list="group-a">
                        <div class="repeater-wrapper pt-0 pt-md-4" data-repeater-item>
                            <div class="d-flex border rounded position-relative pe-0">
                                <div class="row w-100 p-3">
                                    <div class="col-md-5 col-12 mb-md-0 mb-3">
                                        <p class="mb-2 repeater-title">รหัสเฟอร์นิเจอร์</p>
                                        <select class="form-select item-details mb-3">
                                            <option selected disabled>เลือกรายการ</option>
                                            <option value="App Design">App Design</option>
                                            <option value="App Customization">App Customization</option>
                                            <option value="ABC Template">ABC Template</option>
                                            <option value="App Development">App Development</option>
                                        </select>

                                    </div>
                                    <div class="col-md-3 col-12 mb-md-0 mb-3">
                                        <p class="mb-2 repeater-title">ราคาซื้อ</p>
                                        <input type="number" class="form-control invoice-item-price mb-3"
                                            placeholder="฿ 00" min="12" />

                                    </div>
                                    <div class="col-md-2 col-12 mb-md-0 mb-3">
                                        <p class="mb-2 repeater-title">จำนวน</p>
                                        <input type="number" class="form-control invoice-item-qty" placeholder="1"
                                            min="1" max="50" />

                                    </div>
                                    <div class="col-md-2 col-12 pe-0">

                                        <span>ภาษี :</span>
                                        <span class="tax-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Tax 2">0%</span>
                                    </div>

                                </div>
                                <div
                                    class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                                    <i class="ti ti-x cursor-pointer" data-repeater-delete></i>
                                    <div class="dropdown">
                                        <i class="ti ti-settings ti-xs cursor-pointer more-options-dropdown"
                                            role="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                            data-bs-auto-close="outside" aria-expanded="false">
                                        </i>
                                        <div class="dropdown-menu dropdown-menu-end w-px-300 p-3"
                                            aria-labelledby="dropdownMenuButton">

                                            <div class="row g-3">
                                                <div class="col-12"><label for="taxInput2" class="form-label">ภาษี
                                                        (%)</label>
                                                    <select name="tax-2-input" id="taxInput2"
                                                        class="form-select tax-select">
                                                        <option value="0%" selected>0%</option>
                                                        <option value="1%">1%</option>
                                                        <option value="7%">7%</option>
                                                        <option value="10%">10%</option>
                                                        <option value="14%">14%</option>
                                                    </select>

                                                </div>

                                            </div>
                                            <div class="dropdown-divider my-3"></div>
                                            <button type="button"
                                                class="btn btn-label-primary btn-apply-changes">ตกลง</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-12">
                            <button type="button" class="btn btn-primary" data-repeater-create>เพิ่มรายการ</button>
                        </div>
                    </div>
                </form>

                <hr class="my-3 mx-n4" />

                <div class="row p-0 p-sm-4">
                    <div class="col-md-6 mb-md-0 mb-3">
                        <div class="d-flex align-items-center mb-3">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <div class="invoice-calculations">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="w-px-100">รวม :</span>
                                <span class="fw-semibold">฿00.00</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="w-px-100">ภาษี :</span>
                                <span class="fw-semibold">฿00.00</span>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <span class="w-px-100">รวมทั้งสิ้น :</span>
                                <span class="fw-semibold">฿00.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Invoice Add-->

    <!-- Invoice Actions -->
    <div class="col-lg-3 col-12 invoice-actions">
        <div class="card mb-4">
            <div class="card-body">
                <a class="btn btn-label-secondary d-grid w-100 mb-2" target="_blank"
                    href="{{url('app/invoice/print')}}">
                    Print
                </a>
                <button type="button" class="btn btn-label-secondary d-grid w-100">Save</button>
            </div>
        </div>

    </div>
    <!-- /Invoice Actions -->
</div>

<!-- Offcanvas -->
@include('_partials/_offcanvas/offcanvas-send-invoice')
<!-- /Offcanvas -->
@endsection
@extends('layouts/contentLayoutMaster')

@section('title', ' ')

@section('vendor-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection

@section('content')
<!-- users list start -->
<section class="app-user-list">
    <!-- list and filter start -->
    <div class="card">
        <div class="card-body border-bottom">
            <h4 class="card-title">เพิ่มข้อมูลลูกค้า</h4>
            <div class="row">
                <div class="col-md-4 user_role"></div>
                <div class="col-md-4 user_plan"></div>
                <div class="col-md-4 user_status"></div>
            </div>
        </div>
        <div class="card-datatable table-responsive pt-0">
            <table class="user-list-table table">
                <thead class="table-light">
                    <tr>
                        <th></th>
                        <th>รหัส</th>
                        <th>ชื่อ</th>
                        <th>ที่อยู่</th>
                        <th>เบอร์โทร</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
            </table>
        </div>
        <!-- Modal to add new user starts-->
        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
            <div class="modal-dialog">
                <form class="add-new-user modal-content pt-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>

                    <div class="modal-header mb-1">
                        <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลลูกค้า</h5>
                    </div>
                    <div class="modal-body flex-grow-1">
                        <div class="mb-1">
                            <label class="form-label" for="basic-icon-default-fullname">รหัส</label>
                            <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname"
                                placeholder=" " name="user-fullname" />
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="basic-icon-default-uname">ชื่อ</label>
                            <input type="text" id="basic-icon-default-uname" class="form-control dt-uname"
                                placeholder=" " name="user-name" />
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="basic-icon-default-uname">ที่อยู่</label>
                            <input type="text" id="basic-icon-default-uname" class="form-control dt-uname"
                                placeholder=" " name="user-name" />
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="basic-icon-default-contact">เบอร์โทร</label>
                            <input type="text" id="basic-icon-default-contact" class="form-control dt-contact"
                                placeholder=" " name="user-contact" />
                        </div>

                        <button type="submit" class="btn btn-primary me-1 data-submit">ตกลง</button>
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Modal to add new user Ends-->
    </div>
    <!-- list and filter end -->
</section>
<!-- users list ends -->
@endsection

@section('vendor-script')
{{-- Vendor js files --}}
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/cleave/cleave.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/cleave/addons/cleave-phone.us.js')) }}"></script>
@endsection

@section('page-script')
{{-- Page js files --}}
<script src="{{ asset(mix('js/scripts/pages/app-user-list.js')) }}"></script>
@endsection
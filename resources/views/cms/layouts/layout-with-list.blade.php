@extends('layouts.vertical-menu-template.layout-full')
@push('vendor-css')
<link rel="stylesheet" type="text/css" href="{{ asset('../app-assets/vendor/css/forms/select/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('../app-assets/vendor/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('../app-assets/vendor/css/tables/datatable/responsive.bootstrap5.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('../app-assets/vendor/css/tables/datatable/buttons.bootstrap5.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('../app-assets/vendor/css/tables/datatable/rowGroup.bootstrap5.min.css') }}">
@endpush
@push('page-css')
<link rel="stylesheet" type="text/css" href="{{ asset('../app-assets/css/plugins/form/form-validation.css') }}">
@endpush
@section('body')
@include('cms.components.header')
@include('cms.components.main-menu')

@yield('content')

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
@include('frontend.components.footer')
@endsection

@push('page-vendor-js')
<script src="{{ asset('../app-assets/vendor/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('../app-assets/vendor/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('../app-assets/vendor/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('../app-assets/vendor/js/tables/datatable/dataTables.responsive.js') }}"></script>
<script src="{{ asset('../app-assets/vendor/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
<script src="{{ asset('../app-assets/vendor/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('../app-assets/vendor/js/tables/datatable/jszip.min.js') }}"></script>
<script src="{{ asset('../app-assets/vendor/js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{ asset('../app-assets/vendor/js/tables/datatable/vfs_fonts.js') }}"></script>
<script src="{{ asset('../app-assets/vendor/js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ asset('../app-assets/vendor/js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{ asset('../app-assets/vendor/js/tables/datatable/dataTables.rowGroup.min.js') }}}"></script>
<script src="{{ asset('../app-assets/vendor/js/forms/validation/jquery.validate.min.js') }}"></script>
{{-- <script src="../../../app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
<script src="../../../app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script> --}}
@endpush

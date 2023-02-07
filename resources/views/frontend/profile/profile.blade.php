@extends('layouts.horizontal-menu-template.layout-full')
@push('vendor-css')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('../app-assets/vendor/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('../app-assets/vendor/css/tables/datatable/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('../app-assets/vendor/css/tables/datatable/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('../app-assets/vendor/css/tables/datatable/rowGroup.bootstrap5.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('../app-assets/vendor/css/file-uploaders/dropzone.min.css') }}">
@endpush
@push('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('../app-assets/css/plugins/form/form-file-uploader.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../app-assets/css/pages/page-profile.css') }}">
@endpush
@section('body')
    <!-- BEGIN: Header-->
    @include('frontend.components.header')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    @include('frontend.components.main-menu')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Profile</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active">Profile
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i
                                        class="me-1" data-feather="check-square"></i><span
                                        class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i
                                        class="me-1" data-feather="message-square"></i><span
                                        class="align-middle">Chat</span></a><a class="dropdown-item"
                                    href="app-email.html"><i class="me-1" data-feather="mail"></i><span
                                        class="align-middle">Email</span></a><a class="dropdown-item"
                                    href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span
                                        class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div id="user-profile">
                    <!-- profile header -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card profile-header mb-2">
                                <!-- profile cover photo -->
                                <img class="card-img-top" src="../../../app-assets/images/profile/user-uploads/timeline.jpg"
                                    alt="User Profile Image" />
                                <!--/ profile cover photo -->

                                <div class="position-relative">
                                    <!-- profile picture -->
                                    <div class="profile-img-container d-flex align-items-center">
                                        <div class="profile-img">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg"
                                                class="rounded img-fluid" alt="Card image" />
                                        </div>
                                        <!-- profile title -->
                                        <div class="profile-title ms-3">
                                            <h2 class="text-white">Kitty Allanson</h2>
                                            <p class="text-white">Masyarakat</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- tabs pill -->
                                <div class="profile-header-nav">
                                    <!-- navbar -->
                                    <nav
                                        class="navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100">
                                        <button class="btn btn-icon navbar-toggler" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <i data-feather="align-justify" class="font-medium-5"></i>
                                        </button>

                                        <!-- collapse  -->
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <div class="profile-tabs d-flex justify-content-between flex-wrap mt-1 mt-md-0">
                                                <ul class="nav nav-pills mb-0">
                                                    <li class="nav-item">
                                                    </li>
                                                    <li class="nav-item">
                                                    </li>
                                                    <li class="nav-item">
                                                    </li>
                                                    <li class="nav-item">
                                                    </li>
                                                </ul>
                                                <!-- edit button -->
                                                <button data-bs-toggle="modal" data-bs-target="#modal-user" class="btn btn-primary">
                                                    <i data-feather="edit" class="d-block d-md-none"></i>
                                                    <span class="fw-bold d-none d-md-block">Edit</span>
                                                </button>
                                            </div>
                                        </div>
                                        <!--/ collapse  -->
                                    </nav>
                                    <!--/ navbar -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ profile header -->

                    <!-- profile info section -->
                    <section id="profile-info">
                        <div class="row">
                            <!-- left profile info section -->
                            <div class="col-lg-3 col-12 order-2 order-lg-1">
                                <!-- about -->
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="mb-75">About</h5>
                                        <p class="card-text">
                                            Tart I love sugar plum I love oat cake. Sweet ⭐️ roll caramels I love jujubes.
                                            Topping cake wafer.
                                        </p>
                                        <div class="mt-2">
                                            <h5 class="mb-75">Joined:</h5>
                                            <p class="card-text">November 15, 2015</p>
                                        </div>
                                        <div class="mt-2">
                                            <h5 class="mb-75">Lives:</h5>
                                            <p class="card-text">New York, USA</p>
                                        </div>
                                        <div class="mt-2">
                                            <h5 class="mb-75">Email:</h5>
                                            <p class="card-text">bucketful@fiendhead.org</p>
                                        </div>
                                        <div class="mt-2">
                                            <h5 class="mb-50">Website:</h5>
                                            <p class="card-text mb-0">www.pixinvent.com</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/ about -->
                            </div>
                            <!--/ left profile info section -->

                            <!-- center profile info section -->
                            <div class="col-lg-9 col-12 order-1 order-lg-2">
                                <div class="card">
                                    <div class="card-datatable table-responsive pt-0">
                                        <table class="user-list-table table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th></th>
                                                    <th>Barang</th>
                                                    <th>Tawaran</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--/ center profile info section -->
                        </div>
                    </section>
                    <!--/ profile info section -->
                </div>
            </div>
        </div>
    </div>

    <!-- END: Content-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('frontend.profile.modal')

    <!-- BEGIN: Footer-->
    @include('frontend.components.footer')
    <!-- END: Footer-->
@endsection
@push('page-vendor-js')
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
    <script src="{{ asset('../app-assets/vendor/js/file-uploaders/dropzone.min.js') }}"></script>
@endpush
@push('page-js')
    <script src="{{ asset('app-assets/js/scripts/pages/page-profile.js') }}"></script>
    <script src="{{ asset('../app-assets/js/scripts/forms/form-file-uploader.js') }}"></script>
@endpush

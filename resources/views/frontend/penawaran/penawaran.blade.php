@extends('layouts.horizontal-menu-template.layout-full')
@push('vendor-css')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendor/css/forms/spinner/jquery.bootstrap-touchspin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../app-assets/vendor/css/extensions/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../app-assets/vendor/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('../app-assets/vendor/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('../app-assets/vendor/css/tables/datatable/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('../app-assets/vendor/css/tables/datatable/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('../app-assets/vendor/css/tables/datatable/rowGroup.bootstrap5.min.css') }}">
@endpush
@push('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('../app-assets/css/pages/app-ecommerce-details.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../app-assets/css/plugins/form/form-number-input.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('../app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
@endpush
@section('body')
    <!-- BEGIN: Header-->
    @include('frontend.components.header')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    @include('frontend.components.main-menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ecommerce-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Product Details</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">eCommerce</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="app-ecommerce-shop.html">Shop</a>
                                    </li>
                                    <li class="breadcrumb-item active">Details
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
                <!-- app e-commerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <!-- Product Details starts -->
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="../../../app-assets/images/pages/eCommerce/1.png"
                                            class="img-fluid product-img" alt="product image" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <h4>Apple Watch Series 5</h4>
                                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                        <h4 class="item-price me-1">Mulai dari $499.99</h4>
                                    </div>
                                    <p class="card-text">Pemenang - <span class="text-error">Belum ada</span></p>
                                    <p class="card-text">
                                        GPS, Always-On Retina display, 30% larger screen, Swimproof, ECG app, Electrical and
                                        optical heart sensors,
                                        Built-in compass, Elevation, Emergency SOS, Fall Detection, S5 SiP with up to 2x
                                        faster 64-bit dual-core
                                        processor, watchOS 6 with Activity trends, cycle tracking, hearing health
                                        innovations, and the App Store on
                                        your wrist
                                    </p>
                                    <hr />
                                    <div class="d-flex flex-column flex-sm-row pt-1">
                                        <a href="#" class="btn btn-primary btn-cart me-0 me-sm-1 mb-1 mb-sm-0">
                                            <i data-feather="shopping-cart" class="me-50"></i>
                                            <span class="add-to-cart">Add to cart</span>
                                        </a>
                                        <div class="btn-group dropdown-icon-wrapper btn-share">
                                            <button type="button"
                                                class="btn btn-icon hide-arrow btn-outline-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="share-2"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i data-feather="facebook"></i>
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i data-feather="twitter"></i>
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i data-feather="youtube"></i>
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i data-feather="instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Details ends -->

                        <!-- Item features starts -->
                        <div class="item-features">
                            <div class="row text-center">
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="award"></i>
                                        <h4 class="mt-2 mb-1">100% Original</h4>
                                        <p class="card-text">Chocolate bar candy canes ice cream toffee. Croissant pie
                                            cookie halvah.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="clock"></i>
                                        <h4 class="mt-2 mb-1">10 Day Replacement</h4>
                                        <p class="card-text">Marshmallow biscuit donut dragée fruitcake. Jujubes wafer
                                            cupcake.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="shield"></i>
                                        <h4 class="mt-2 mb-1">1 Year Warranty</h4>
                                        <p class="card-text">Cotton candy gingerbread cake I love sugar plum I love sweet
                                            croissant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item features ends -->

                        <!-- Related Products starts -->
                        <div class="card-body">
                            <div class="mt-4 mb-2 text-center">
                                <h4>Daftar Penawaran</h4>
                                <p class="card-text">Berikut semua daftar penawaran pada barang ini</p>
                            </div>
                            <div class="card px-4 py-2">
                                <div class="card-datatable table-responsive pt-0">
                                    <table class="user-list-table table">
                                        <thead class="table-light">
                                            <tr>
                                                <th></th>
                                                <th>Ranking</th>
                                                <th>User</th>
                                                <th>Tawaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="swiper-responsive-breakpoints swiper-container px-4 py-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <div class="item-heading">
                                                <h5 class="text-truncate mb-0">Apple Watch Series 6</h5>
                                                <small class="text-body">by Apple</small>
                                            </div>
                                            <div class="img-container w-50 mx-auto py-75">
                                                <img src="../../../app-assets/images/elements/apple-watch.png"
                                                    class="img-fluid" alt="image" />
                                            </div>
                                            <div class="item-meta">
                                                <ul class="unstyled-list list-inline mb-25">
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                </ul>
                                                <p class="card-text text-primary mb-0">$399.98</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <div class="item-heading">
                                                <h5 class="text-truncate mb-0">Apple MacBook Pro - Silver</h5>
                                                <small class="text-body">by Apple</small>
                                            </div>
                                            <div class="img-container w-50 mx-auto py-50">
                                                <img src="../../../app-assets/images/elements/macbook-pro.png"
                                                    class="img-fluid" alt="image" />
                                            </div>
                                            <div class="item-meta">
                                                <ul class="unstyled-list list-inline mb-25">
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                </ul>
                                                <p class="card-text text-primary mb-0">$2449.49</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <div class="item-heading">
                                                <h5 class="text-truncate mb-0">Apple HomePod (Space Grey)</h5>
                                                <small class="text-body">by Apple</small>
                                            </div>
                                            <div class="img-container w-50 mx-auto py-75">
                                                <img src="../../../app-assets/images/elements/homepod.png"
                                                    class="img-fluid" alt="image" />
                                            </div>
                                            <div class="item-meta">
                                                <ul class="unstyled-list list-inline mb-25">
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                </ul>
                                                <p class="card-text text-primary mb-0">$229.29</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <div class="item-heading">
                                                <h5 class="text-truncate mb-0">Magic Mouse 2 - Black</h5>
                                                <small class="text-body">by Apple</small>
                                            </div>
                                            <div class="img-container w-50 mx-auto py-75">
                                                <img src="../../../app-assets/images/elements/magic-mouse.png"
                                                    class="img-fluid" alt="image" />
                                            </div>
                                            <div class="item-meta">
                                                <ul class="unstyled-list list-inline mb-25">
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                </ul>
                                                <p class="card-text text-primary mb-0">$90.98</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <div class="item-heading">
                                                <h5 class="text-truncate mb-0">iPhone 12 Pro</h5>
                                                <small class="text-body">by Apple</small>
                                            </div>
                                            <div class="img-container w-50 mx-auto py-75">
                                                <img src="../../../app-assets/images/elements/iphone-x.png"
                                                    class="img-fluid" alt="image" />
                                            </div>
                                            <div class="item-meta">
                                                <ul class="unstyled-list list-inline mb-25">
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                </ul>
                                                <p class="card-text text-primary mb-0">$1559.99</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div> --}}
                        </div>
                        <!-- Related Products ends -->
                    </div>
                </section>
                <!-- app e-commerce details end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @include('frontend.penawaran.modal-tawaran')
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('frontend.components.footer')
    <!-- END: Footer-->
@endsection
@push('page-vendor-js')
    <script src="{{ asset('../app-assets/vendor/js/forms/spinner/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('../app-assets/vendor/js/extensions/swiper.min.js') }}"></script>
    <script src="{{ asset('../app-assets/vendor/js/extensions/toastr.min.js') }}"></script>
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
@endpush
@push('page-js')
    <script src="{{ asset('../app-assets/js/scripts/pages/app-ecommerce-details.js') }}"></script>
    <script src="{{ asset('../app-assets/js/scripts/forms/form-number-input.js') }}"></script>
    <script src="{{ asset('../app-assets/js/scripts/pages/frontend/app-tawaran.js') }}"></script>
@endpush

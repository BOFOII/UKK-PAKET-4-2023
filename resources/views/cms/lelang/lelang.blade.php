@extends('cms.layouts.layout-with-list')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="app-user-list">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">21,459</h3>
                                        <span>Total Lelang</span>
                                    </div>
                                    <div class="avatar bg-light-primary p-50">
                                        <span class="avatar-content">
                                          <svg class="font-medium-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hammer" viewBox="0 0 16 16">
                                            <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5.009 5.009 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334z"/>
                                          </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- list and filter start -->
                    <div class="card">
                        <div class="card-body border-bottom">
                            <h4 class="card-title">Search & Filter</h4>
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
                                        <th>Barang</th>
                                        <th>Petugas</th>
                                        <th>Pemenang</th>
                                        <th>Harga Akhir</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar colorClass me-1">
                                                    <img src="" alt="Avatar" height="32" width="32">
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="" class="user_name text-truncate text-body">
                                                    <span class="fw-bolder">Iphone 12 Pro MAX</span>
                                                </a>
                                                <small class="emp_post text-muted">Tanggal:
                                                    2022-12-12
                                                </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar colorClass me-1">
                                                    <img src="" alt="Avatar" height="32" width="32">
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="" class="user_name text-truncate text-body">
                                                    <span class="fw-bolder">Bofoii</span>
                                                </a>
                                                <small class="emp_post text-muted">Username:
                                                    bofoii
                                                </small>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- <td>
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar colorClass me-1">
                                                    <img src="" alt="Avatar" height="32" width="32">
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="" class="user_name text-truncate text-body">
                                                    <span class="fw-bolder">Bofoii</span>
                                                </a>
                                                <small class="emp_post text-muted">Username:
                                                    bofoii
                                                </small>
                                            </div>
                                        </div>
                                    </td> --}}
                                    <td>
                                      <small class="text-nowrap">Beum Ada Harga Akhir</small>
                                    </td>
                                    <td>
                                      <small class="text-nowrap">Beum Ada Harga Akhir</small>
                                    </td>
                                    <td>
                                      <small class="text-nowrap">Dibuka</small>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-vertical font-small-4">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="" class="dropdown-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-vertical font-small-4">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                    Details
                                                </a>
                                                <a href="javascript:;" class="dropdown-item delete-record">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash-2 font-small-4 me-50">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10"
                                                            y2="17"></line>
                                                        <line x1="14" y1="11" x2="14"
                                                            y2="17"></line>
                                                    </svg>
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal to add new user starts-->
                        @include('cms.lelang.modal')
                        <!-- Modal to add new user Ends-->
                    </div>
                    <!-- list and filter end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
@endsection
@push('page-js')
    <script src="{{ asset('app-assets/js/scripts/pages/cms/app-lelang-list.js') }}"></script>
@endpush

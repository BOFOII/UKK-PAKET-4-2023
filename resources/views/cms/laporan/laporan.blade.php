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
                                  <span>Total Users</span>
                              </div>
                              <div class="avatar bg-light-primary p-50">
                                  <span class="avatar-content">
                                      <i data-feather="user" class="font-medium-4"></i>
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <div class="card">
                          <div class="card-body d-flex align-items-center justify-content-between">
                              <div>
                                  <h3 class="fw-bolder mb-75">4,567</h3>
                                  <span>Paid Users</span>
                              </div>
                              <div class="avatar bg-light-danger p-50">
                                  <span class="avatar-content">
                                      <i data-feather="user-plus" class="font-medium-4"></i>
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <div class="card">
                          <div class="card-body d-flex align-items-center justify-content-between">
                              <div>
                                  <h3 class="fw-bolder mb-75">19,860</h3>
                                  <span>Active Users</span>
                              </div>
                              <div class="avatar bg-light-success p-50">
                                  <span class="avatar-content">
                                      <i data-feather="user-check" class="font-medium-4"></i>
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <div class="card">
                          <div class="card-body d-flex align-items-center justify-content-between">
                              <div>
                                  <h3 class="fw-bolder mb-75">237</h3>
                                  <span>Pending Users</span>
                              </div>
                              <div class="avatar bg-light-warning p-50">
                                  <span class="avatar-content">
                                      <i data-feather="user-x" class="font-medium-4"></i>
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- list and filter start -->
              <div class="card">
                  <div class="card-body border-bottom">
                      <h4 class="card-title">Filter & Export</h4>
                      <div class="row">
                          <div class="col-md-4 user_role"></div>
                          <div class="col-md-4 user_plan"></div>
                          <div class="col-md-4 user_status"></div>
                      </div>
                  </div>
              </div>
              <!-- list and filter end -->
          </section>
          <!-- users list ends -->
      </div>
  </div>
</div>
@endsection

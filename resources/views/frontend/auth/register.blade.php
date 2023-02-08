@extends('layouts.horizontal-menu-template.layout-blank')
@push('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('../app-assets/css/plugins/form/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../app-assets/css/pages/authentication.css') }}">
@endpush
@push('page-vendor-js')
    <script src="{{ asset('../app-assets/vendor/js/forms/validation/jquery.validate.min.js') }}"></script>
@endpush
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo-->
                        <a class="brand-logo" href="index.html">
                          <svg xmlns="http://www.w3.org/2000/svg" height="28" fill="currentColor" class="bi bi-hammer" viewBox="0 0 16 16">
                            <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5.009 5.009 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334z"/>
                          </svg>
                            <h2 class="brand-text text-primary ms-1">Lelang Aja</h2>
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img
                                    class="img-fluid" src="../../../app-assets/images/pages/register-v2.svg"
                                    alt="Register V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Register-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bold mb-1">Penawaranmu dimulai disini 🚀</h2>
                                <p class="card-text mb-2">Buat akunmu dan berikan penawaran terbaikmu!</p>
                                <form class="auth-register-form mt-2" action="" method="POST">
                                    <div class="mb-1">
                                        <label class="form-label" for="register-username">Username</label>
                                        <input class="form-control error" id="register-username" type="text"
                                            name="register-username" placeholder="johndoe"
                                            aria-describedby="register-username" autofocus="" tabindex="1" />
                                        <span id="basic-default-name-error" class="error">This field is
                                            required.</span>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-password">Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge error" id="register-password"
                                                type="password" name="register-password" placeholder="············"
                                                aria-describedby="register-password" tabindex="3" /><span
                                                class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                            <span id="basic-default-name-error" class="error">This field is
                                                required.</span>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-password">Konfirmasi Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge error" id="register-password"
                                                type="password" name="register-password" placeholder="············"
                                                aria-describedby="register-password" tabindex="3" /><span
                                                class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                            <span id="basic-default-name-error" class="error">This field is
                                                required.</span>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" id="register-privacy-policy" type="checkbox"
                                                tabindex="4" />
                                            <label class="form-check-label" for="register-privacy-policy">Saya
                                                menyetujui<a href="#">&nbsp;kebijakan privasi</a></label>
                                            <span id="basic-default-name-error" class="error">This field is
                                                required.</span>
                                        </div>
                                    </div>
                                </form>
                                <button class="btn btn-primary w-100" tabindex="5">Daftar</button>

                                <p class="text-center mt-2"><span>Sudah memiliki akun?</span><a
                                        href="auth-login-cover.html"><span>&nbsp;Masuk disini</span></a></p>
                            </div>
                        </div>
                        <!-- /Register-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

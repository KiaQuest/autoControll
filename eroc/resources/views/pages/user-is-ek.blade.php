@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Iş eklemek sayfasi'])
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ auth()->user()->firstname ?? 'Firstname' }} {{ auth()->user()->lastname ?? 'Lastname' }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Iş Ekle
                        </p>
                    </div>
                </div>
{{--                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">--}}
{{--                    <div class="nav-wrapper position-relative end-0">--}}
{{--                        <ul class="nav nav-pills nav-fill p-1" role="tablist">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "--}}
{{--                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">--}}
{{--                                    <i class="ni ni-app"></i>--}}
{{--                                    <span class="ms-2">App</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "--}}
{{--                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">--}}
{{--                                    <i class="ni ni-email-83"></i>--}}
{{--                                    <span class="ms-2">Mesajlar</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "--}}
{{--                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">--}}
{{--                                    <i class="ni ni-settings-gear-65"></i>--}}
{{--                                    <span class="ms-2">Ayarlar</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <div id="alert">
        @include('components.alert')
    </div>
    <style>
        .req{
            margin: .5rem;
            color: coral;
        }
    </style>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form role="form" method="POST" action={{ route('is.create') }} enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
{{--                                <p class="mb-0">Edit Profile</p> kament--}}
                                <p class="mb-0">Iş ekle</p>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Kaydet</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Iş Bilgileri</p>
                            <div class="row">
                                    <div class="form-group">

                                        <label class="form-label" for="YapilacakIs"> YapilacakIs<span class="req">*</span></label>
                                        <input name="YapilacakIs" type="text" class="form-control" required="" data-val="true" data-val-required="The YapilacakIs field is required." id="YapilacakIs">
                                        <span class="text-danger field-validation-valid" data-valmsg-for="YapilacakIs" data-valmsg-replace="true"></span><br>

                                        <label class="form-label" for="IsBaslangicTarihi"> IsBaslangicTarihi</label>
                                        <input name="IsBaslangicTarihi" type="date" class="form-control" data-val="true" data-val-required="The IsBaslangicTarihi field is required." id="IsBaslangicTarihi">
{{--                                        <input name="__Invariant" type="hidden" value="IsBaslangicTarihi">--}}
                                        <br>
                                        <label class="form-label" for="IsBitisTarihi"> IsBitisTarihi</label>
                                        <input name="IsBitisTarihi" type="date" class="form-control"  data-val="true" data-val-required="The IsBitisTarihi field is required." id="IsBitisTarihi">
{{--                                        <input name="__Invariant" type="hidden" value="IsBitisTarihi">--}}
                                        <br>
                                        <label class="form-label" for="TarlaID">Aciklama</label>
{{--                                        <select class="form-control" name="TarlaID"  data-val="true" data-val-required="The TarlaID field is required." id="TarlaID">--}}
{{--                                            <option value="2e687495-e4c2-4e40-8a86-03be0d9a1f4c" selected="selected">Merkez Mahallesi (Ortaburun Köyü) /Çınarcık /Yalova </option>--}}
{{--                                            <option value="8bfb854b-998c-4489-85bb-164058bbc98a">Akıncılar Mahallesi (Dikyamaç Köyü) /Arhavi /Artvin </option>--}}
{{--                                        </select>--}}
                                        <input name="Tarla" type="text" class="form-control" value="" id="TarlaID">
                                        <span class="text-danger field-validation-valid" data-valmsg-for="TarlaID" data-valmsg-replace="true"></span><br>

{{--                                        <input name="TarlaID" type="hidden" class="form-control" value="" id="TarlaID"><br>--}}
{{--                                        <input name="CalisanID" type="hidden" class="form-control" value="e8d5c2b1-8c73-4a7a-9b90-0a0864fb82b7" data-val="true" data-val-required="The CalisanID field is required." id="CalisanID">--}}




                                    </div>




                            </div>

                        </div>
                    </form>
                </div>
            </div>
{{--            <div class="col-md-4">--}}
{{--                <div class="card card-profile">--}}
{{--                    <img src="/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">--}}
{{--                    <div class="row justify-content-center">--}}
{{--                        <div class="col-4 col-lg-4 order-lg-2">--}}
{{--                            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">--}}
{{--                                <a href="javascript:;">--}}
{{--                                    <img src="/img/team-2.jpg"--}}
{{--                                        class="rounded-circle img-fluid border border-2 border-white">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">--}}
{{--                        <div class="d-flex justify-content-between">--}}
{{--                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>--}}
{{--                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i--}}
{{--                                    class="ni ni-collection"></i></a>--}}
{{--                            <a href="javascript:;"--}}
{{--                                class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>--}}
{{--                            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i--}}
{{--                                    class="ni ni-email-83"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body pt-0">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col">--}}
{{--                                <div class="d-flex justify-content-center">--}}
{{--                                    <div class="d-grid text-center">--}}
{{--                                        <span class="text-lg font-weight-bolder">22</span>--}}
{{--                                        <span class="text-sm opacity-8">Friends</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-grid text-center mx-4">--}}
{{--                                        <span class="text-lg font-weight-bolder">10</span>--}}
{{--                                        <span class="text-sm opacity-8">Photos</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-grid text-center">--}}
{{--                                        <span class="text-lg font-weight-bolder">89</span>--}}
{{--                                        <span class="text-sm opacity-8">Comments</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="text-center mt-4">--}}
{{--                            <h5>--}}
{{--                                Mark Davis<span class="font-weight-light">, 35</span>--}}
{{--                            </h5>--}}
{{--                            <div class="h6 font-weight-300">--}}
{{--                                <i class="ni location_pin mr-2"></i>Bucharest, Romania--}}
{{--                            </div>--}}
{{--                            <div class="h6 mt-4">--}}
{{--                                <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <i class="ni education_hat mr-2"></i>University of Computer Science--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        @include('layouts.footers.auth.footer')
    </div>


@endsection

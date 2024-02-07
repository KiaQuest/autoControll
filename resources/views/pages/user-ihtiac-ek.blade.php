@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Ihtiac Ekleme sayfasi'])
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
                            Ihtiac Ekle
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                    <i class="ni ni-app"></i>
                                    <span class="ms-2">App</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-email-83"></i>
                                    <span class="ms-2">Mesajlar</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="ms-2">Ayarlar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">

                    @if($errors->any())
                        <h4 style="color: deepskyblue; padding: 2em;">{{$errors->first()}}</h4>
                    @endif

                    <form role="form" method="POST" action={{ route('ihtiac.create') }} enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">ihtiac ekle</p>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Kayd</button>
                            </div>
                        </div>
                        <div class="card-body">
{{--                            <p class="text-uppercase text-sm">User Information</p>--}}
                            <div class="row">
                                <div class="form-group">


                                    <style>
                                        .req{
                                            margin: .5rem;
                                            color: coral;
                                        }
                                    </style>

                                    <label class="form-label" for="about">açiklama <span class="req">*</span></label>
                                <input name="about" type="text" class="form-control" required >
                                <span class="text-danger field-validation-valid" ></span><br>

                                <label class="form-label" for="firma">Firma</label>
{{--                                <input name="firma" type="text" class="form-control" >--}}
                                    <select name="firma" id="firma" class="form-control" style="appearance:button" required>
                                        <option disabled selected value> -- fırma adı -- </option>

                                        @foreach($firmaz as $z)
                                            <option value="{{ $z->id }}">{{ $z->firma }}</option>
                                        @endforeach

                                    </select>
                                <br>


{{--                                <label class="form-label" for="Durum">Durum</label>--}}
{{--                                <select class="form-control" name="Durum" required="" data-val="true" data-val-required="'Durum' must not be empty." id="Durum">--}}
{{--                                    <option value="Aktif" selected="selected">Aktif</option>--}}
{{--                                    <option value="Pasif">Pasif</option>--}}

{{--                                </select>--}}
{{--                                <span class="text-danger field-validation-valid" data-valmsg-for="Durum" data-valmsg-replace="true"></span><br>--}}


{{--                                    <div class="row">--}}
{{--                                        <div class="col-4"><label for="alacak">alacak </label> <input type="text" name="alacak" id="alacak" class="form-control"></div>--}}
{{--                                        <select name="OdemeTipi" id="OdemeTipi">--}}
{{--                                            <option value="alacak">alacak</option>--}}
{{--                                            <option value="verecek">verecek</option>--}}
{{--                                        </select>--}}
{{--                                        <div class="col-4"><label for="alacak">verecek </label> <input type="text" name="verecek" id="verecek" class="form-control"></div>--}}
{{--                                        <div class="col-4"><label for="kalan">kalan </label> <input type="text" name="kalan" id="kalan" class="form-control"></div>--}}

{{--                                    </div>--}}



                                    <br>
                                    <div class="row" style="justify-content: space-around ">
                                        {{--                                    <div class="row" style="justify-content: space-around">--}}

                                        <div class="col-md-5" >
                                            <label class="form-label" for="OdemeTipi">OdemeTipi<span
                                                    class="req"> *</span></label>
                                            <select class="form-control" name="OdemeTipi" data-val="true" id="OdemeTipi">
                                                <option disabled selected> -- Tip -- </option>
                                                <option value="alacak">alacak</option>
                                                <option value="verecek">verecek</option>
                                            </select><br>
                                        </div>


                                        <div class="col-md-5" >
                                            <label class="form-label" for="toplam">Toplam Fiat<span class="req">*</span></label>
                                            <input name="toplam" type="text" class="form-control" id="toplam" required>
                                        </div>
                                        <div class="col-md-5">

                                            <label class="form-label" for="kapora">Alinan ya Verilen Mebleğ <span class="req">*</span></label>
                                            <input name="kapora" type="text" class="form-control" id="kapora"  required>
                                        </div>

                                        <div class="col-md-5">

                                            <label class="form-label" for="kalan">Kalan<span class="req">*</span></label>
                                            <input name="kalan" type="text" class="form-control" id="kalan"  required>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <script src=
                        "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
            </script>

            <script>
                $(function () {
                    $("input[name='toplam']").on('input', function (e) {
                        $(this).val($(this).val().replace(/[^0-9]/g, ''));
                    });
                });

                $(function () {
                    $("input[name='kapora']").on('input', function (e) {
                        $(this).val($(this).val().replace(/[^0-9]/g, ''));
                    });
                });

                $(function () {
                    $("input[name='kalan']").on('input', function (e) {
                        $(this).val($(this).val().replace(/[^0-9]/g, ''));
                    });
                });
            </script>

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

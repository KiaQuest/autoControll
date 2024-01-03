@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
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
                            Public Relations
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
                                    <span class="ms-2">Messages</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="ms-2">Settings</span>
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
                    <form role="form" method="POST" action={{ route('odeme.create') }} enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
{{--                                <p class="mb-0">Edit Profile</p> kament--}}
                                <p class="mb-0 fs-3">Ödeme Ekle</p>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                            </div>
                        </div>
                        <div class="card-body">
{{--                            <p class="text-uppercase text-sm">Firma Information</p>--}}
                            <div class="row">
                                    <div class="form-group">

                                        <label class="form-label" for="TarlaID">Odeme Tipi <span class="req">*</span></label>
                                            <select class="form-control" name="OdemeTipi"  id="TarlaID" required>
                                                <option disabled selected value> -- select an option -- </option>
                                                <option value="verecek" >Ödeme verecek</option>
                                                <option value="alacak" >Ödeme alacak</option>
                                            </select>
                                        <br>
{{--                                        <input name="OdemeTipi" type="hidden" class="form-control" value="verecek" data-val="true" data-val-required="'Odeme Tipi' must not be empty." id="OdemeTipi">--}}

                                        <label class="form-label" for="OdeyenAd">Odeyen Adı<span class="req">*</span></label>
                                        <input name="OdeyenAd" type="text" class="form-control" required="" data-val="true" data-val-required="The OdeyenAd field is required." id="OdeyenAd">
                                        <span class="text-danger field-validation-valid" data-valmsg-for="OdeyenAd" data-valmsg-replace="true"></span><br>
                                        <label class="form-label" for="OdeyenSoyad">Odeyen Soyad</label>
                                        <input name="OdeyenSoyad" type="text" class="form-control" data-val="true" data-val-required="The OdeyenSoyad field is required." id="OdeyenSoyad">
                                        <span class="text-danger field-validation-valid" data-valmsg-for="OdeyenSoyad" data-valmsg-replace="true"></span><br>

                                        <label class="form-label" for="OdeyenTc">Odeyen Tc</label>
                                        <input name="OdeyenTc" type="text" class="form-control" data-val="true" data-val-required="The OdeyenTc field is required." id="OdeyenTc">
                                        <span class="text-danger field-validation-valid" data-valmsg-for="OdeyenTc" data-valmsg-replace="true"></span><br>

                                        <label class="form-label" for="VadeTarihi">Vade Tarihi</label>
                                        <input name="VadeTarihi" type="date" class="form-control" id="VadeTarihi">
{{--                                        <input name="__Invariant" type="hidden" value="VadeTarihi">--}}
                                        <br>

{{--                                        <label class="form-label" for="OdemeSekli">OdemeSekli</label>--}}
{{--                                        <select class="form-control" name="OdemeSekli"data-val="true" data-val-required="'Odeme Sekli' must not be empty." id="OdemeSekli">--}}
{{--                                            <option value="kart" selected="selected">kart</option>--}}
{{--                                            <option value="nakit">nakit</option>--}}
{{--                                            <option value="havale">havale</option>--}}
{{--                                        </select>--}}
{{--                                        <span class="text-danger field-validation-valid" data-valmsg-for="OdemeSekli" data-valmsg-replace="true"></span><br>--}}






                                        <br>
                                        <div class="row" style="justify-content: space-around">
                                            {{--                                    <div class="row" style="justify-content: space-around">--}}
                                            <div class="col-md-5">
                                                <label class="form-label" for="parselfiyati">Toplam Fiat<span
                                                        class="req">*</span></label>
                                                <input name="parselfiyati" type="text" class="form-control" id="parselfiyati"
                                                       required>
                                            </div>
                                            <div class="col-md-5">

                                                <label class="form-label" for="kapora">Peşin (Kapora)<span
                                                        class="req">*</span></label>
                                                <input name="kapora" type="text" class="form-control" id="kapora"
                                                       required value="0">
                                            </div>

                                            <div class="col-md-5">
                                                <label class="form-label" for="OdemeSekli">OdemeSekli</label>
                                                <select class="form-control" name="OdemeSekli" data-val="true"
                                                        data-val-required="'Odeme Sekli' must not be empty."
                                                        id="OdemeSekli">
                                                    <option value="kart" selected="selected">kart</option>
                                                    <option value="nakit">nakit</option>
                                                    <option value="havale">havale</option>
                                                </select><br>
                                            </div>



                                            <div class="col-md-5">

                                                <label class="form-label" for="kalan">Kalan<span
                                                        class="req">*</span></label>
                                                <input name="kalan" type="text" class="form-control" id="kalan"
                                                       required value="0">
                                            </div>

                                        </div>


                                        <br>
{{--                                        <label class="form-label" for="kapora">Kapora</label>--}}
{{--                                        <input name="kapora" type="text" class="form-control" id="kapora">--}}
{{--                                        <input name="OdemeTipi" type="hidden" class="form-control" value="alacak" data-val="true" data-val-required="'Odeme Tipi' must not be empty." id="OdemeTipi">--}}

{{--                                        <span class="text-danger field-validation-valid" data-valmsg-for="OdemeTipi" data-valmsg-replace="true"></span><br>--}}


                                        <label class="form-label" for="Tutar"> Tutar</label>
                                        <input name="Tutar" type="number" class="form-control"  data-val="true" data-val-number="The field Tutar must be a number." data-val-required="'Tutar' must not be empty." id="Tutar">
{{--                                        <input name="__Invariant" type="hidden" value="Tutar">--}}
                                        <span class="text-danger field-validation-valid" data-valmsg-for="Tutar" data-valmsg-replace="true"></span><br>

                                        <label class="form-label" for="TarlaID">Alınacak Tarla</label>
{{--                                        <select class="form-control" name="TarlaID"  data-val="true" data-val-required="'Tarla ID' must not be empty." id="TarlaID">--}}
{{--                                            <option value="2e687495-e4c2-4e40-8a86-03be0d9a1f4c" selected="selected">Merkez Mahallesi (Ortaburun Köyü) /Çınarcık /Yalova </option>--}}
{{--                                            <option value="8bfb854b-998c-4489-85bb-164058bbc98a">Akıncılar Mahallesi (Dikyamaç Köyü) /Arhavi /Artvin </option>--}}
{{--                                        </select>--}}
                                        <input type="text" name="Tarla" class="form-control">
                                        <span class="text-danger field-validation-valid" data-valmsg-for="TarlaID" data-valmsg-replace="true"></span><br>

                                        <label class="form-label" for="CalisanID">Yetkili Çalışan</label>
{{--                                        <select class="form-control" name="CalisanID" data-val="true" data-val-required="'Calisan ID' must not be empty." id="CalisanID">--}}
{{--                                            <option value="b8e07559-daa9-4495-9193-20b1784fbdab" selected="selected">Serhat Durduran</option>--}}
{{--                                            <option value="5b8c69f5-ced0-4111-af5a-221b4e0ca202">bilal bal</option>--}}
{{--                                            <option value="426f1be7-5ad7-4cfb-9c5d-85cffb403d3d">metin yıldız</option>--}}
{{--                                        </select>--}}
                                        <input type="text" name="Yetkili" class="form-control">
                                        <span class="text-danger field-validation-valid" data-valmsg-for="CalisanID" data-valmsg-replace="true"></span>
                                        <br>


                                        <label class="form-label" for="OdemeAciklama"> Odeme Açıklaması</label>
                                        <input name="OdemeAciklama" type="text" class="form-control" id="OdemeAciklama">
{{--                                        <input name="type" type="hidden" value="1">--}}
{{--                                        <span class="text-danger field-validation-valid" data-valmsg-for="Durum" data-valmsg-replace="true"></span>--}}
{{--                                        <label class="form-label" for="FirmaAciklama">Firma Açıklaması</label>--}}

                                    </div>




                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Firma Açıklaması</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Firma Açıklaması</label>
                                        <input class="form-control" type="text" name="About"
                                            >
                                    </div>
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

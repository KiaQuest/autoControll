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
        @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form role="form" method="POST" action={{ route('profile.create.ek') }} enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
{{--                                <p class="mb-0">Edit Profile</p> kament--}}
                                <p class="mb-0">Üye ekle</p>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">User Information</p>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Username</label><span class="req">*</span>
{{--                                        <input class="form-control" type="text" name="username" value="{{ old('username', auth()->user()->username) }}">--}}
                                        <input class="form-control" type="text" name="username" value="{{ old('username') }}" required>
                                        @error('username') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Rol</label><span class="req">*</span>
{{--{{ dd($data) }}--}}
                                        <select name="level" id="level" class="form-control" style="appearance:button" required>
                                            <option disabled selected value> - Rolünü tanımla - </option>
                                            <option value="5">Çalışn</option>
                                            <option value="4">Müdür</option>
                                            <option value="3">Muhasebeci</option>
                                            <option value="2">CEO</option>

                                        </select>
{{--                                        <input class="form-control" type="email" name="email" value="{{ old('email', auth()->user()->email) }}">--}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" id="ustu" style="display: none">
                                        <label for="example-text-input" class="form-control-label">Üstü</label><span class="req">*</span>
{{--{{ dd($data) }}--}}
                                        <select name="ust" id="ust" class="form-control" style="appearance:button" required disabled>
                                            <option disabled selected value> -- kimin altı -- </option>

                                            @foreach($data as $z)
                                                <option value="{{ $z->id }}">{{ $z->username }}</option>
                                            @endforeach

                                        </select>
{{--                                        <input class="form-control" type="email" name="email" value="{{ old('email', auth()->user()->email) }}">--}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">First name</label><span class="req">*</span>
                                        <input class="form-control" type="text" name="firstname"  value="{{ old('firstname') }}" required>
{{--                                        <input class="form-control" type="text" name="firstname"  value="{{ old('firstname', auth()->user()->firstname) }}">--}}
                                    </div>
                                </div>
                                <style>
                                    .req{
                                        margin: 0 .5rem;
                                        color: coral
                                    }
                                </style>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Last name</label>
                                        <input class="form-control" type="text" name="lastname" value="{{ old('lastname') }}">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Password</label><span class="req">*</span>
                                        <input class="form-control" type="text" name="password" value="{{ old('password') }}" required>
                                        @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Maaş</label>
                                        <input class="form-control" type="text" name="maas" value="{{ old('maas') }}" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Durum</label><span class="req">*</span>
{{--                                        <input class="form-control" type="text" name="durum" value="{{ old('durum') }}" required>--}}
                                        <select name="durum" id="durum" class="form-control" style="appearance:button">

                                                <option value="0">Aktif</option>
                                                <option value="1">Pasif</option>


                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Email</label>
                                        <input type="text" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Telefon</label>
                                        <input type="text" name="telefon" id="telefon" class="form-control" value="{{ old('telefon') }}">
                                        @error('telefon') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Contact Information</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Address</label>
                                        <input class="form-control" type="text" name="address"
                                            value="{{ old('address', auth()->user()->address) }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">City</label>
                                        <input class="form-control" type="text" name="city" value="{{ old('city', auth()->user()->city) }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Country</label>
                                        <input class="form-control" type="text" name="country" value="{{ old('country', auth()->user()->country) }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Postal code</label>
                                        <input class="form-control" type="text" name="postal" value="{{ old('postal', auth()->user()->postal) }}">
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">About me</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">About me</label>
                                        <input class="form-control" type="text" name="about"
                                            value="{{ old('about', auth()->user()->about) }}">
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


    <script>

        let a = document.getElementById('level');

        let head = document.getElementById('ustu');

        a.addEventListener('change', function () {

            fetch("api/mudurs")
                .then((response) => {
                    if (response.ok) {
                        return response.json();
                    }
                })
                .then(data => {

                    if (this.value == 5){
                        console.log('dzdz');

                        head.style.display = 'initial';
                        document.getElementById('ust').removeAttribute("disabled");

                    }else {

                        // tik();
                        head.style.display = 'none';
                        document.getElementById('ust').setAttribute("disabled" , true);

                    }

                });

        });

console.log('yalla');
        // a.setAttribute("onchange", console.log('yuhahahahaha'));
console.log('yalla2');







        function tik(){
            let per = document.getElementById('tik');
            per.innerHTML = '&#x2705';
        }

    </script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

@endsection

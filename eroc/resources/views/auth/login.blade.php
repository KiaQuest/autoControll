@extends('layouts.app')

@section('content')
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                @include('layouts.navbars.guest.navbar')
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Giriş</h4>
{{--                                    <p class="mb-0">Enter your email and password to sign in</p>--}}
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login.perform') }}">
                                        @csrf
                                        @method('post')
{{--                                        <div class="flex flex-col mb-3">--}}
{{--                                            <input type="email" name="email" class="form-control form-control-lg" value="{{ old('email') ?? 'admin@argon.com' }}" aria-label="Email">--}}
{{--                                            @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror--}}
{{--                                        </div>--}}
{{--                                        <div class="flex flex-col mb-3">--}}
{{--                                            <input type="password" name="password" class="form-control form-control-lg" aria-label="Password" value="secret" >--}}
{{--                                            @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror--}}
{{--                                        </div>--}}
                                        <div class="flex flex-col mb-3">
                                            <input type="text" name="username" class="form-control form-control-lg" aria-label="Username" placeholder="User / Telefon">
                                            @error('username') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="password" name="password" class="form-control form-control-lg" aria-label="Password" placeholder="Şifre">
                                            @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Hatırla beni</label>
{{--                                            <label class="form-check-label" for="rememberMe">Remember me</label>--}}
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Giriş</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
{{--                                    <p class="mb-1 text-sm mx-auto">--}}
{{--                                        Forgot you password? Reset your password--}}
{{--                                        <a href="{{ route('reset-password') }}" class="text-primary text-gradient font-weight-bold">here</a>--}}
{{--                                    </p>--}}
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
{{--                                    <p class="mb-4 text-sm mx-auto">--}}
{{--                                        Don't have an account?--}}
{{--                                        <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Sign up</a>--}}
{{--                                    </p>--}}
                                </div>
                            </div>
                        </div>
{{--                        <style>--}}
{{--                            .bg-gradient-primary{--}}
{{--                                background-image:  !important;--}}
{{--                            }--}}
{{--                        </style>--}}
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative  h-100 m-3 mx-5 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
{{--                                style="background-image: {{ asset('me/ex/2.webp') }};--}}
                                style="background-image: url('http://emlaksaticilari.online/public/me/ex/1.jpeg');
{{--                                style="background-image: url('http://localhost/me/dukan%20projects/auto/public/me/ex/1.jpeg');--}}
                                    background-size: cover;">
                                {{--style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');--}}
{{--                                <span class="mask bg-gradient-primary opacity-6"></span>--}}
                                <span class="mask opacity-6"></span>
{{--                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new--}}
{{--                                    currency"</h4>--}}
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"BIESAA GROUP"</h4>
{{--                                <p class="text-white position-relative">The more effortless the writing looks, the more--}}
{{--                                    effort the writer actually put into the process.</p>--}}
                                <p class="text-white position-relative">Türkiye Ko-operatif ve Satış danışmanı, Hobi bahçe lezzetine düy.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <script>console.log('Developd and designed by KiaQuest (www.kiaquest.ir)')</script>
@endsection
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('home') }}"
            target="_blank">
            <img src="./img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Argon Dashboard 2 Laravel</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main" style="height: initial">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-3 d-flex align-items-center">
                <div class="ps-4">
                    <i class="fab fa-laravel" style="color: #f4645f;"></i>
                </div>
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">Laravel Examples</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}" href="{{ route('profile') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
{{--            @if(Auth::user()->level < 3 )--}}


{{--                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}






                <style>
                    .collapsible {
                        background-color: #777;
                        color: white;
                        cursor: pointer;
                        padding: 18px;
                        width: 100%;
                        border: none;
                        text-align: left;
                        outline: none;
                        font-size: 15px;
                    }

                    .active, .collapsible:hover {
                        background-color: #555;
                    }

                    .content {
                        padding: 0 18px;
                        max-height: 0;
                        overflow: hidden;
                        transition: max-height 0.2s ease-out;
                        background-color: #f1f1f1;
                    }

                    .arrow {
                        border: solid black;
                        border-width: 0 3px 3px 0;
                        display: inline-block;
                        padding: 3px;
                    }.down {
                         transform: rotate(45deg);
                         -webkit-transform: rotate(45deg);
                     }

                     .po{
                         display: flex;
                         justify-content: space-between;
                         align-items: center;
                     }
                </style>


            <style>
                .active, .collapsible:hover {
                    background-color: #d5d5d5 !important;
                }
            </style>
                <button class="collapsible po">Firma İşlemleri <i class="arrow down"></i></button>
                <div class="content">

                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'firma.show' ? 'active' : '' }}" href="{{ route('firma.show') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">fırma ekle</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'firma.index' ? 'active' : '' }}" href="{{ route('firma.index') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">fırma listesı</span>
                        </a>
                    </li>


                </div>




                <button class="collapsible po">Çalışan İşlemleri <i class="arrow down"></i></button>
                <div class="content">

                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'profile.ek' ? 'active' : '' }}" href="{{ route('profile.ek') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Çalışn ekle</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'users' ? 'active' : '' }}" href="{{ route('users') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Çalışanlar</span>
                        </a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'is.show' ? 'active' : '' }}" href="{{ route('is.show') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Iş Ekle</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'is.index' ? 'active' : '' }}" href="{{ route('is.index') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Yapılan işler</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'ihtiac.show' ? 'active' : '' }}" href="{{ route('ihtiac.show') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Ihtiac Ekle</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'ihtiac.index' ? 'active' : '' }}" href="{{ route('ihtiac.index') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">İhtiyaçlarım</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'sikayet.show' ? 'active' : '' }}" href="{{ route('sikayet.show') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Şikayet Ekle</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'sikayet.index' ? 'active' : '' }}" href="{{ route('sikayet.index') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Şikayetlerim</span>
                        </a>
                    </li>



                </div>


{{--                <p>Collapsible Set:</p>--}}
{{--                <button class="collapsible">Open Section 1</button>--}}
{{--                <div class="content">--}}
{{--                    <p>Lorem ipsum dolor sit amerdo consequat.</p>--}}
{{--                </div>--}}
{{--                <button class="collapsible">Open Section 2</button>--}}
{{--                <div class="content">--}}
{{--                    <p>Lorem ipsum dolrmodo consequat.</p>--}}
{{--                </div>--}}
{{--                <button class="collapsible">Open Section 3</button>--}}
{{--                <div class="content">--}}
{{--                    <p>Lorem ipr consequat.</p>--}}
{{--                </div>--}}












                <button class="collapsible po">Tarla İşlemleri <i class="arrow down"></i></button>
                <div class="content">
                    {{--                    <p>Loremrrnsequat.</p>--}}

                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'tarla.show' ? 'active' : '' }}" href="{{ route('tarla.show') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Tarla ekle</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'tarla.index' ? 'active' : '' }}" href="{{ route('tarla.index') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Tarla listesı</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'tarla.satis' ? 'active' : '' }}" href="{{ route('tarla.satis') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Tarla Satışı</span>
                        </a>
                    </li>


                </div>


                <button class="collapsible po">Ödeme İşlemleri <i class="arrow down"></i></button>
                <div class="content">



                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'odeme.show' ? 'active' : '' }}" href="{{ route('odeme.show') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Ödeme</span>
                        </a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'odeme.index' ? 'active' : '' }}" href="{{ route('odeme.index') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Satiş listesı</span>
                        </a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'odeme.index.alinmis' ? 'active' : '' }}" href="{{ route('odeme.index.alinmis') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Alinmiş listesı</span>
                        </a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'odeme.index.bekleyen' ? 'active' : '' }}" href="{{ route('odeme.index.bekleyen') }}">
                            <div
                                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Bekleyen listesı</span>
                        </a>
                    </li>


                </div>



                <button class="collapsible po">Müşteri İşlemleri <i class="arrow down"></i></button>
                <div class="content">
                    {{--                    <p>Loremrrnsequat.</p>--}}

                </div>


                <button class="collapsible po">Çalışan Kontrol <i class="arrow down"></i></button>
                <div class="content">


                </div>



                <button class="collapsible po">Yönetici İşlemleri <i class="arrow down"></i></button>
                <div class="content">
                    {{--                    <p>Loremrrnsequat.</p>--}}

                </div>


                <button class="collapsible po">Müdür Kontrol <i class="arrow down"></i></button>
                <div class="content">
                    {{--                    <p>Loremrrnsequat.</p>--}}

                </div>


                <script>
                    var coll = document.getElementsByClassName("collapsible");
                    var i;

                    for (i = 0; i < coll.length; i++) {
                        coll[i].addEventListener("click", function() {
                            this.classList.toggle("active");
                            var content = this.nextElementSibling;
                            if (content.style.maxHeight){
                                content.style.maxHeight = null;
                            } else {
                                content.style.maxHeight = content.scrollHeight + "px";
                            }
                        });
                    }
                </script>






{{--            @endif--}}
            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'user-management') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'user-management']) }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Management</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'tables') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'tables']) }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tables</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{  str_contains(request()->url(), 'billing') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'billing']) }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Billing</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'virtual-reality' ? 'active' : '' }}" href="{{ route('virtual-reality') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Virtual Reality</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'rtl' ? 'active' : '' }}" href="{{ route('rtl') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">RTL</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'profile-static' ? 'active' : '' }}" href="{{ route('profile-static') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('sign-in-static') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('sign-up-static') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
{{--    <div class="sidenav-footer mx-3 ">--}}
{{--        <div class="card card-plain shadow-none" id="sidenavCard">--}}
{{--            <img class="w-50 mx-auto" src="/img/illustrations/icon-documentation-warning.svg"--}}
{{--                alt="sidebar_illustration">--}}
{{--            <div class="card-body text-center p-3 w-100 pt-0">--}}
{{--                <div class="docs-info">--}}
{{--                    <h6 class="mb-0">Need help?</h6>--}}
{{--                    <p class="text-xs font-weight-bold mb-0">Please check our docs</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <a href="/docs/bootstrap/overview/argon-dashboard/index.html" target="_blank"--}}
{{--            class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>--}}
{{--        <a class="btn btn-primary btn-sm mb-0 w-100"--}}
{{--            href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank" type="button">Upgrade to PRO</a>--}}
{{--    </div>--}}
</aside>

@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Muşteri index sayfasi'])

{{--    <style>--}}
{{--        body{--}}
{{--            g-sidenav-pinned;--}}
{{--        }--}}
{{--    </style>--}}

    <script>
        // document.getElementsByTagName("body")[0].setAttribute("class", "g-sidenav-pinned")
    </script>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Muşteriler Tablosu</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 mobile1">
                                            #</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Müşteri adi</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Müşteri Telefonu</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 mobile1">
                                            Müşteri adresi</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Açiklama</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 mobile1">
                                            yapan</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 mobile1">
                                            Tarih</th>
{{--                                        <th class="text-secondary opacity-7"></th>--}}
                                    </tr>
                                </thead>
                                <tbody>

{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        <div class="d-flex px-2 py-1">--}}
{{--                                            <div>--}}
{{--                                                <img src="/img/team-2.jpg" class="avatar avatar-sm me-3"--}}
{{--                                                     alt="user1">--}}
{{--                                            </div>--}}
{{--                                            <div class="d-flex flex-column justify-content-center">--}}
{{--                                                <h6 class="mb-0 text-sm">John Michael</h6>--}}
{{--                                                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <p class="text-xs font-weight-bold mb-0">Manager</p>--}}
{{--                                        <p class="text-xs text-secondary mb-0">Organization</p>--}}
{{--                                    </td>--}}
{{--                                    <td class="align-middle text-center text-sm">--}}
{{--                                        <span class="badge badge-sm bg-gradient-success">Online</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="align-middle text-center">--}}
{{--                                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>--}}
{{--                                    </td>--}}
{{--                                    <td class="align-middle">--}}
{{--                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"--}}
{{--                                           data-toggle="tooltip" data-original-title="Edit user">--}}
{{--                                            Edit--}}
{{--                                        </a>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

                                @foreach($data as $z)
                                    <tr>
                                        <td class=" mobile1">
                                            <p class="text-xm font-weight-lighter mb-0 px-2">{{ $loop->iteration  }}</p>
                                        </td>
                                        <td>
{{--                                            <div class="d-flex px-2 py-1">--}}
{{--                                                <div>--}}
{{--                                                    <img src="/img/team-2.jpg" class="avatar avatar-sm me-3"--}}
{{--                                                        alt="user1">--}}
{{--                                                </div>--}}
{{--                                                <div class="d-flex flex-column justify-content-center">--}}
{{--                                                    <h6 class="mb-0 text-sm">John Michael</h6>--}}
{{--                                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <p class="text-xm font-weight-bold mb-0 px-2">{{ $z->metn }}</p>--}}

                                                <p class="text-xs font-weight-bold mb-0">{{ $z->ad }}</p>
                                                <p class="text-xs text-secondary mb-0">{{ $z->soyad }}</p>
                                        </td>
                                        <td>
{{--                                            <p class="text-xs font-weight-bold mb-0">Manager</p>--}}
{{--                                            <p class="text-xs text-secondary mb-0">Organization</p>--}}
                                            <a href="tel:{{ $z->tel }}"><p class="text-xs font-weight-bold mb-0 ">{{ $z->tel }}</p></a>
{{--                                            <p class="text-xs font-weight-bold mb-0 ">{{ $z->tel }}</p>--}}

                                        </td>
                                        <td class=" mobile1">
{{--                                            <p class="text-xs font-weight-bold mb-0">Manager</p>--}}
{{--                                            <p class="text-xs text-secondary mb-0">Organization</p>--}}
                                            <p class="text-xs font-weight-bold mb-0 ">{{ $z->adres }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0 ">{{ $z->about }}</p>
                                        </td>
{{--                                        <td class="align-middle text-center text-sm">--}}
{{--                                            <span class="badge badge-sm bg-gradient-{{ $z->durum == 0 ? "success" : "secondary" }}">{{ $z->durum == 0 ? "Aktif" : "Pasif" }}</span>--}}
{{--                                            <span class="badge badge-sm bg-gradient-{{ $z->SatisDurumu == 'satilmadi' ? "warning" : "info" }}">{{ $z->SatisDurumu}}</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle text-center">--}}
{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->Ada }}</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle text-center">--}}
{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->Parsel }}</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle text-center">--}}
{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->MetreKare }}</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle">--}}
{{--                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"--}}
{{--                                                data-toggle="tooltip" data-original-title="Edit user">--}}
{{--                                                Edit--}}
{{--                                            </a>--}}
{{--                                            <p class="text-xs font-weight-bold mb-0">{{ $z->SahipAd }}</p>--}}
{{--                                            <p class="text-xs text-secondary mb-0">{{ $z->SahipSoyad }}</p>--}}
{{--                                        </td>--}}
                                        <td class="align-middle mobile1">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->yapan }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->created_at }}</span>
                                        </td>
                                    </tr>

                                @endforeach
                                <tr id="mobile1"></tr>
                                </tbody>
                            </table>
                            <style>
                                td{
                                    white-space: normal !important;
                                }
                                table{table-layout: fixed;
                                    text-align: center;
                                }
                            </style>
                        </div>
                    </div>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="card mb-4">--}}
{{--                    <div class="card-header pb-0">--}}
{{--                        <h6>Projects table</h6>--}}
{{--                    </div>--}}
{{--                    <div class="card-body px-0 pt-0 pb-2">--}}
{{--                        <div class="table-responsive p-0">--}}
{{--                            <table class="table align-items-center justify-content-center mb-0">--}}
{{--                                <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">--}}
{{--                                            Project</th>--}}
{{--                                        <th--}}
{{--                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">--}}
{{--                                            Budget</th>--}}
{{--                                        <th--}}
{{--                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">--}}
{{--                                            Status</th>--}}
{{--                                        <th--}}
{{--                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">--}}
{{--                                            Completion</th>--}}
{{--                                        <th></th>--}}
{{--                                    </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex px-2">--}}
{{--                                                <div>--}}
{{--                                                    <img src="/img/small-logos/logo-spotify.svg"--}}
{{--                                                        class="avatar avatar-sm rounded-circle me-2" alt="spotify">--}}
{{--                                                </div>--}}
{{--                                                <div class="my-auto">--}}
{{--                                                    <h6 class="mb-0 text-sm">Spotify</h6>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <p class="text-sm font-weight-bold mb-0">$2,500</p>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <span class="text-xs font-weight-bold">working</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle text-center">--}}
{{--                                            <div class="d-flex align-items-center justify-content-center">--}}
{{--                                                <span class="me-2 text-xs font-weight-bold">60%</span>--}}
{{--                                                <div>--}}
{{--                                                    <div class="progress">--}}
{{--                                                        <div class="progress-bar bg-gradient-info" role="progressbar"--}}
{{--                                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"--}}
{{--                                                            style="width: 60%;"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle">--}}
{{--                                            <button class="btn btn-link text-secondary mb-0">--}}
{{--                                                <i class="fa fa-ellipsis-v text-xs"></i>--}}
{{--                                            </button>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex px-2">--}}
{{--                                                <div>--}}
{{--                                                    <img src="/img/small-logos/logo-invision.svg"--}}
{{--                                                        class="avatar avatar-sm rounded-circle me-2" alt="invision">--}}
{{--                                                </div>--}}
{{--                                                <div class="my-auto">--}}
{{--                                                    <h6 class="mb-0 text-sm">Invision</h6>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <p class="text-sm font-weight-bold mb-0">$5,000</p>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <span class="text-xs font-weight-bold">done</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle text-center">--}}
{{--                                            <div class="d-flex align-items-center justify-content-center">--}}
{{--                                                <span class="me-2 text-xs font-weight-bold">100%</span>--}}
{{--                                                <div>--}}
{{--                                                    <div class="progress">--}}
{{--                                                        <div class="progress-bar bg-gradient-success" role="progressbar"--}}
{{--                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"--}}
{{--                                                            style="width: 100%;"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle">--}}
{{--                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"--}}
{{--                                                aria-expanded="false">--}}
{{--                                                <i class="fa fa-ellipsis-v text-xs"></i>--}}
{{--                                            </button>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex px-2">--}}
{{--                                                <div>--}}
{{--                                                    <img src="/img/small-logos/logo-jira.svg"--}}
{{--                                                        class="avatar avatar-sm rounded-circle me-2" alt="jira">--}}
{{--                                                </div>--}}
{{--                                                <div class="my-auto">--}}
{{--                                                    <h6 class="mb-0 text-sm">Jira</h6>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <p class="text-sm font-weight-bold mb-0">$3,400</p>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <span class="text-xs font-weight-bold">canceled</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle text-center">--}}
{{--                                            <div class="d-flex align-items-center justify-content-center">--}}
{{--                                                <span class="me-2 text-xs font-weight-bold">30%</span>--}}
{{--                                                <div>--}}
{{--                                                    <div class="progress">--}}
{{--                                                        <div class="progress-bar bg-gradient-danger" role="progressbar"--}}
{{--                                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="30"--}}
{{--                                                            style="width: 30%;"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle">--}}
{{--                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"--}}
{{--                                                aria-expanded="false">--}}
{{--                                                <i class="fa fa-ellipsis-v text-xs"></i>--}}
{{--                                            </button>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex px-2">--}}
{{--                                                <div>--}}
{{--                                                    <img src="/img/small-logos/logo-slack.svg"--}}
{{--                                                        class="avatar avatar-sm rounded-circle me-2" alt="slack">--}}
{{--                                                </div>--}}
{{--                                                <div class="my-auto">--}}
{{--                                                    <h6 class="mb-0 text-sm">Slack</h6>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <p class="text-sm font-weight-bold mb-0">$1,000</p>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <span class="text-xs font-weight-bold">canceled</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle text-center">--}}
{{--                                            <div class="d-flex align-items-center justify-content-center">--}}
{{--                                                <span class="me-2 text-xs font-weight-bold">0%</span>--}}
{{--                                                <div>--}}
{{--                                                    <div class="progress">--}}
{{--                                                        <div class="progress-bar bg-gradient-success" role="progressbar"--}}
{{--                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="0"--}}
{{--                                                            style="width: 0%;"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle">--}}
{{--                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"--}}
{{--                                                aria-expanded="false">--}}
{{--                                                <i class="fa fa-ellipsis-v text-xs"></i>--}}
{{--                                            </button>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex px-2">--}}
{{--                                                <div>--}}
{{--                                                    <img src="/img/small-logos/logo-webdev.svg"--}}
{{--                                                        class="avatar avatar-sm rounded-circle me-2" alt="webdev">--}}
{{--                                                </div>--}}
{{--                                                <div class="my-auto">--}}
{{--                                                    <h6 class="mb-0 text-sm">Webdev</h6>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <p class="text-sm font-weight-bold mb-0">$14,000</p>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <span class="text-xs font-weight-bold">working</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle text-center">--}}
{{--                                            <div class="d-flex align-items-center justify-content-center">--}}
{{--                                                <span class="me-2 text-xs font-weight-bold">80%</span>--}}
{{--                                                <div>--}}
{{--                                                    <div class="progress">--}}
{{--                                                        <div class="progress-bar bg-gradient-info" role="progressbar"--}}
{{--                                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="80"--}}
{{--                                                            style="width: 80%;"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle">--}}
{{--                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"--}}
{{--                                                aria-expanded="false">--}}
{{--                                                <i class="fa fa-ellipsis-v text-xs"></i>--}}
{{--                                            </button>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex px-2">--}}
{{--                                                <div>--}}
{{--                                                    <img src="/img/small-logos/logo-xd.svg"--}}
{{--                                                        class="avatar avatar-sm rounded-circle me-2" alt="xd">--}}
{{--                                                </div>--}}
{{--                                                <div class="my-auto">--}}
{{--                                                    <h6 class="mb-0 text-sm">Adobe XD</h6>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <p class="text-sm font-weight-bold mb-0">$2,300</p>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <span class="text-xs font-weight-bold">done</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle text-center">--}}
{{--                                            <div class="d-flex align-items-center justify-content-center">--}}
{{--                                                <span class="me-2 text-xs font-weight-bold">100%</span>--}}
{{--                                                <div>--}}
{{--                                                    <div class="progress">--}}
{{--                                                        <div class="progress-bar bg-gradient-success" role="progressbar"--}}
{{--                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"--}}
{{--                                                            style="width: 100%;"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle">--}}
{{--                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"--}}
{{--                                                aria-expanded="false">--}}
{{--                                                <i class="fa fa-ellipsis-v text-xs"></i>--}}
{{--                                            </button>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        @include('layouts.footers.auth.footer')
    </div>
@endsection

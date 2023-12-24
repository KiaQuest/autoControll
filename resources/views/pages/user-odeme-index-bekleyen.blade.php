@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Authors table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        #
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tip
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Odeyen
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Sekli
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        user
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Aciklama
                                    </th>
                                    {{--                                        <th--}}
                                    {{--                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">--}}
                                    {{--                                            tutar</th>--}}
                                    {{--                                        <th--}}
                                    {{--                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">--}}
                                    {{--                                            Tarla</th>--}}
                                    {{--                                        <th--}}
                                    {{--                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">--}}
                                    {{--                                            Yetkili</th>--}}
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tarih
                                    </th>
                                    {{--                                        <th class="text-secondary opacity-7"></th>--}}
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
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

                                <style>
                                    .btnkia {
                                        margin: auto !important;
                                        padding: revert !important;
                                    }
                                </style>
                                @foreach($data as $z)
                                    <tr>
                                        <td>

                                            <p class="text-xm font-weight-lighter mb-0 px-2">{{ $loop->iteration  }}</p>

                                        </td>
                                        <td>

                                            <p class="text-xm font-weight-lighter mb-0 px-2">{{ $z->OdemeTipi  }}</p>

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

                                            <p class="text-xm font-weight-bold mb-0 px-2"> {{ $z->parselfiyati }}</p>
                                            <p class="text-xs text-secondary mb-0">Kalan {{ $z->kalan }}</p>

                                        </td>
                                        {{--                                        <td>--}}
                                        {{--                                            <p class="text-xs font-weight-bold mb-0">Manager</p>--}}
                                        {{--                                            <p class="text-xs text-secondary mb-0">Organization</p>--}}

                                        {{--                                            <p class="text-xs font-weight-bold mb-0 ">{{ $z->VadeTarihi }}</p>--}}

                                        {{--                                        </td>--}}
                                        {{--                                        <td class="align-middle text-center text-sm">--}}
                                        {{--                                            <span class="badge badge-sm bg-gradient-{{ $z->durum == 0 ? "success" : "secondary" }}">{{ $z->durum == 0 ? "Aktif" : "Pasif" }}</span>--}}
                                        {{--                                            <span class="badge badge-sm bg-gradient-{{ $z->SatisDurumu == 'satilmadi' ? "warning" : "info" }}">{{ $z->SatisDurumu}}</span>--}}
                                        {{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->Ada }}</span>--}}
                                        {{--                                        </td>--}}
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $z->OdemeSekli }}</span>
                                        </td>
                                        {{--                                        <td class="align-middle text-center">--}}
                                        {{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->Tutar }}</span>--}}
                                        {{--                                        </td>--}}
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->kim }}</span>
                                        </td>
                                        <td class="align-middle">
                                            {{--                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"--}}
                                            {{--                                                data-toggle="tooltip" data-original-title="Edit user">--}}
                                            {{--                                                Edit--}}
                                            {{--                                            </a>--}}
                                            {{--                                            <p class="text-xs font-weight-bold mb-0">{{ $z->SahipAd }}</p>--}}
                                            {{--                                            <p class="text-xs text-secondary mb-0">{{ $z->SahipSoyad }}</p>--}}
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $z->OdemeAciklama }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $z->created_at->todatestring() }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('odeme.onayla' , [ 'id' => $z->id ]) }}"><span
                                                    class="badge badge-sm bg-gradient-success">Onayla</span></a>
                                            <button type="button" class="btn btn-danger btn-sm btnkia"
                                                    onclick="sor({{ $z->id }})"><i class="fa fa-trash"> sil</i></button>
                                            {{--                                            <a href="{{ route('odeme.onayla' , [ 'id' => $z->id , 'tarlaID' => $z->tarlaID]) }}"><span class="badge badge-sm bg-gradient-success">Onayla</span></a>--}}
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>


                            <style>
                                /* The Modal (background) */
                                .modal {
                                    display: none; /* Hidden by default */
                                    position: fixed; /* Stay in place */
                                    z-index: 1; /* Sit on top */
                                    padding-top: 100px; /* Location of the box */
                                    left: 0;
                                    top: 0;
                                    width: 100%; /* Full width */
                                    height: 100%; /* Full height */
                                    overflow: auto; /* Enable scroll if needed */
                                    background-color: rgb(0, 0, 0); /* Fallback color */
                                    background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
                                }

                                /* Modal Content */
                                .modal-content {
                                    position: relative;
                                    background-color: #fefefe;
                                    margin: auto;
                                    padding: 0;
                                    border: 1px solid #888;
                                    width: 40%;
                                    /*width: 80%;*/
                                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                                    -webkit-animation-name: animatetop;
                                    -webkit-animation-duration: 0.4s;
                                    animation-name: animatetop;
                                    animation-duration: 0.4s
                                }

                                /* Add Animation */
                                @-webkit-keyframes animatetop {
                                    from {
                                        top: -300px;
                                        opacity: 0
                                    }
                                    to {
                                        top: 0;
                                        opacity: 1
                                    }
                                }

                                @keyframes animatetop {
                                    from {
                                        top: -300px;
                                        opacity: 0
                                    }
                                    to {
                                        top: 0;
                                        opacity: 1
                                    }
                                }

                                /* The Close Button */
                                .close {
                                    color: white;
                                    float: right;
                                    font-size: 28px;
                                    font-weight: bold;
                                }

                                .close:hover,
                                .close:focus {
                                    color: #000;
                                    text-decoration: none;
                                    cursor: pointer;
                                }

                                .modal-header {
                                    padding: 2px 16px;
                                    background-color: #f9ab57;
                                    color: white;
                                }

                                .modal-body {
                                    padding: 2px 16px;
                                }

                                .modal-footer {
                                    padding: 2px 16px;
                                    background-color: #5cb85c;
                                    color: white;
                                }

                                .modalkia {
                                    display: flex;
                                    justify-content: space-evenly;
                                    padding: 6%;
                                }
                            </style>


                            <!-- Trigger/Open The Modal -->
                            {{--                            <button id="myBtn">Open Modal</button>--}}

                            <!-- The Modal -->
                            <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <div class="modal-header" style="direction: rtl">
                                        <span class="close">&times;</span>
                                        <h3>? Kapora varsa ne olsun</h3>
                                    </div>
                                    <div class="modal-body modalkia">
                                        {{--                                        <p>Some text in the Modal Body</p>--}}
                                        {{--                                        <p>Some other text...</p>--}}
                                            <a href="" id="a1">
                                                <button class="btn badge badge-sm bg-gradient-info p-3">Kaporanida sil
                                                </button>
                                            </a>
                                            <a href="" id="a2">
                                                <button class="btn badge badge-sm bg-gradient-secondary p-3"
                                                        value="bt5">Kapora cibde kalsin
                                                </button>
                                            </a>
                                    </div>
                                    {{--                                    <div class="modal-footer">--}}
                                    {{--                                        <h3>Modal Footer</h3>--}}
                                    {{--                                    </div>--}}
                                </div>

                            </div>

                            <script>
                                // Get the modal
                                // var modal = document.getElementsByClassName("btnkia");
                                var modal = document.getElementById("myModal");

                                // Get the button that opens the modal
                                // var btn = document.getElementById("myBtn");

                                // Get the <span> element that closes the modal
                                var span = document.getElementsByClassName("close")[0];

                                // When the user clicks the button, open the modal
                                // btn.onclick = function() {
                                //     modal.style.display = "block";
                                // }

                                // When the user clicks on <span> (x), close the modal
                                span.onclick = function () {
                                    modal.style.display = "none";
                                }

                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function (event) {
                                    if (event.target == modal) {
                                        modal.style.display = "none";
                                    }
                                }

                                function sor(id) {

                                    modal.style.display = "block";

                                    let www = '{{ route('odeme.sil') }}';
                                    let w3 = www + '?id=' + id + '&kapora=' + 1
                                    // console.log(w3);
                                    document.getElementById('a2').setAttribute('href' , w3);



                                    {{--let www = '{{ route('odeme.sil') }}';--}}
                                    let w4 = www + '?id=' + id + '&kapora=' + 0
                                    // console.log(w3);
                                    document.getElementById('a1').setAttribute('href' , w4);




                                }
                            </script>


                            <style>
                                td {
                                    white-space: normal !important;
                                }

                                table {
                                    table-layout: fixed;
                                    text-align: center;
                                }
                            </style>
                        </div>
                    </div>
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

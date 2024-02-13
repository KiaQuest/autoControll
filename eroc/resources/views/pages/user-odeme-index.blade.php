@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Ödeme Listesi'])


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Odemeler Listesı</h6>
{{--                        <h6>Odeme table (max = 20)</h6>--}}
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
{{--                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">--}}
{{--                                            #</th>--}}
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            açıklama</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                            yapan</th>
{{--                                        <th--}}
{{--                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">--}}
{{--                                            Parsel sayi</th>--}}
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 mobile1">
                                            Alacak</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 mobile1">
                                            Verecek</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 mobile2">
                                            Miktar</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 mobile1">
                                            kalan</th>
{{--                                        <th--}}
{{--                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">--}}
{{--                                            Toplam</th>--}}
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
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 mobile1">
                                            Tarih</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Onay</th>
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
<style>
    .btnkia{
        margin: auto !important;
        padding: revert !important;
    }
</style>
@php
//    if ($data[0]->OdemeTipi == 'alacak'){
//
//                                           $kalan = $data[0]->kapora;
//                                       }else{
//                                           $kalan = $data[0]->kapora * -1;
//                                       }
//dd($data);
   $kalan = 0;
   $ek = 0;
//   echo $data[0]->kapora;
   $katalizgar = 0;
@endphp
                                @foreach($data as $z)
                                    @php


//                                    $ek = 5;
                                    if ($z->OdemeTipi == 'alacak'){
                                        $ek = $z->kapora;
                                    }else{
                                        $ek = $z->kapora * -1;
                                    }
                                    $son = $kalan + $ek + $katalizgar;
                                    $katalizgar = $son;

                                    @endphp
                                    <tr  style="background-color: {{ $z->OdemeTipi == 'alacak' ? '#7fffab50' : '#fdefdc' }}">
{{--                                        <td>--}}

{{--                                            <p class="text-xm font-weight-lighter mb-0 px-2">{{ $loop->iteration  }}</p>--}}

{{--                                        </td>--}}
                                        <td>

                                            <p class="text-xm font-weight-lighter mb-0 px-2">{{ Str::limit($z->About, 35)  }} {{ $z->About != null ? '/' : '' }} {{ Str::limit($z->OdemeAciklama, 25) }} </p>

                                        </td>
                                        <td>
{{--                                        <td id="z{{ $loop->iteration }}" zid="{{ $z->tarlaID }}">--}}
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

{{--                                            <p class="text-xm font-weight-bold mb-0 px-2">{{ $z->OdeyenAd }}</p>--}}
{{--                                            <p class="text-xs text-secondary mb-0">{{ $z->OdeyenSoyad }}</p>--}}
                                            <p class="text-xm font-weight-bold mb-0 px-2"> {{ $z->yapan }}</p>
{{--                                            <p class="text-xm font-weight-bold mb-0 px-2"> {{ $z->tarlaID }}</p>--}}
{{--                                            <p class="text-xs text-secondary mb-0" id="bname"></p>--}}
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
{{--                                        <td class="align-middle text-center">--}}
{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->parselsayisi }}</span>--}}
{{--                                        </td>--}}
                                        @if($z->OdemeTipi == 'alacak')

                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{ number_format($z->kapora) }} <span class="mobile1">₺</span></span>
                                            </td>
                                            <td class="align-middle text-center mobile1">
                                            </td>
                                        @else()

                                            <td class="align-middle text-center mobile1">
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{ number_format($z->kapora) }} <span class="mobile1">₺</span></span>
                                            </td>
                                            @endif
{{--                                        <td class="align-middle text-center">--}}
{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->Tutar }}</span>--}}
{{--                                        </td>--}}
{{--                                        /////// kalan   //////   kalan //////////   kalan /////////////  kalan --}}
{{--                                        <td class="align-middle text-center">--}}
{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->kalan }}</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle">--}}
{{--                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"--}}
{{--                                                data-toggle="tooltip" data-original-title="Edit user">--}}
{{--                                                Edit--}}
{{--                                            </a>--}}
{{--                                            <p class="text-xs font-weight-bold mb-0">{{ $z->SahipAd }}</p>--}}
{{--                                            <p class="text-xs text-secondary mb-0">{{ $z->SahipSoyad }}</p>--}}
{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->parselfiyati }}</span>--}}
{{--                                        </td>--}}
                                        <td class="align-middle mobile1">
                                            <span class="text-secondary text-xs font-weight-bold">{{ number_format($son) }}</span>
                                        </td>
                                        <td class="align-middle mobile1">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->created_at }}</span>
                                        </td>
                                        <td class="align-middle desktop1">
{{--                                            @if($z->delete == 0)--}}
{{--                                                <span class="text-secondary text-xs font-weight-bold ">Onaylanmiş</span>--}}

                                                <a href="{{ route('onay.durumu.change' , ['id' => $z->id]) }}"><button type="button" class="btn btn-danger btn-sm btnkia"><i class="fa fa-trash"> iptal</i></button></a>
                       <button type="button" class="btn btn-info btn-sm btnkia" id="b{{ $loop->iteration }}" style="margin: 0 0 0 1em !important;"
                                                    onclick="odemeDetay({{ $z->id}})"><i class="fa fa-eye"></i></button>
{{--                                            @else--}}
{{--                                                <span class="text-secondary text-xs font-weight-bold ">Silinip</span>--}}
{{--                                            @endif--}}
{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->onay }}</span>--}}
                                        </td>
                                    </tr>



                                    @php

                                    $r = $son;
                                 @endphp
                                @endforeach

<tr>

    <td></td>

    <td></td>
    @if($toplamHep < 0 )

        <td> </td>
        <td>
{{--            {{ $toplam }} ₺--}}
            <span class="mobile3" >Toplam</span>   {{ number_format($toplamHep) }}   ₺
        </td>
    @else


        <td>
{{--            {{ $toplam }} ₺--}}
            <span class="mobile3">Toplam</span>   {{ number_format($toplamHep) }}   ₺
        </td>
        <td> </td>
    @endif
    <td> @if(isset($r))
            {{ number_format($r) }}
    @endif</td>
    <td></td>

</tr>

{{--                        VADEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE               --}}
{{--        <tr>--}}
{{--            <td>--}}
{{--                vade--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        --}}
{{--        @foreach($vade as $z)--}}
{{--            <tr  style="background-color: {{ $z->OdemeTipi == 'alacak' ? '#7fffab50' : '#fdefdc' }}">--}}
{{--                <td>--}}
{{--        --}}
{{--                    <p class="text-xm font-weight-lighter mb-0 px-2">{{ $loop->iteration  }}</p>--}}
{{--        --}}
{{--                </td>--}}
{{--                <td>--}}
{{--        --}}
{{--                    <p class="text-xm font-weight-lighter mb-0 px-2">{{ $z->OdemeTipi  }}</p>--}}
{{--        --}}
{{--                </td>--}}
{{--                <td id="z{{ $loop->iteration }}" zid="{{ $z->tarlaID }}">--}}
{{--        --}}
{{--                </td>--}}
{{--        --}}{{--        <td class="align-middle text-center">--}}
{{--        --}}{{--            <span class="text-secondary text-xs font-weight-bold">{{ $z->parselsayisi }}</span>--}}
{{--        --}}{{--        </td>--}}
{{--                @if($z->OdemeTipi == 'alacak')--}}
{{--        --}}
{{--                    <td class="align-middle text-center">--}}
{{--                        <span class="text-secondary text-xs font-weight-bold">{{ $z->kapora }} ₺</span>--}}
{{--                    </td>--}}
{{--                    <td class="align-middle text-center">--}}
{{--                    </td>--}}
{{--                @else()--}}
{{--        --}}
{{--                    <td class="align-middle text-center">--}}
{{--                    </td>--}}
{{--                    <td class="align-middle text-center">--}}
{{--                        <span class="text-secondary text-xs font-weight-bold">{{ $z->kapora }} ₺</span>--}}
{{--                    </td>--}}
{{--                @endif--}}
{{--                <td class="align-middle">--}}
{{--                    <span class="text-secondary text-xs font-weight-bold">{{ $z->created_at->todatestring() }}</span>--}}
{{--                </td>--}}
{{--                <td class="align-middle">--}}
{{--                    --}}{{--                                            @if($z->delete == 0)--}}
{{--                    <span class="text-secondary text-xs font-weight-bold ">Onaylanmiş</span>--}}
{{--                    <a href="{{ route('vade.onay.sil' , ['id' => $z->id]) }}"><button type="button" class="btn btn-danger btn-sm btnkia"><i class="fa fa-trash"> iptal</i></button></a>--}}
{{--                    --}}{{--                                            @else--}}
{{--                    --}}{{--                                                <span class="text-secondary text-xs font-weight-bold ">Silinip</span>--}}
{{--                    --}}{{--                                            @endif--}}
{{--                    --}}{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->onay }}</span>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        --}}
{{--        @endforeach--}}
{{--                        VADEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE     END            --}}
{{--<tr>--}}
{{--    --}}{{--                       SILILANLAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAR           --}}
{{--    <td>sililanlar</td>--}}

{{--    <script>--}}



{{--        function cc(){--}}

{{--            let g = document.getElementById('bname');--}}

{{--            let man = document.createElement("span");--}}
{{--            man.innerHTML = 's2' ;--}}
{{--            g.appendChild(man);--}}
{{--        }--}}


{{--        </script>--}}
{{--</tr>--}}
{{--                                @foreach($sililanlar as $x)--}}
{{--                                    <tr  style="background-color: {{ $x->OdemeTipi == 'alacak' ? '#7fffab50' : '#fdefdc' }}">--}}
{{--                                        <td>--}}

{{--                                            <p class="text-xm font-weight-lighter mb-0 px-2">{{ $loop->iteration  }}</p>--}}

{{--                                        </td>--}}
{{--                                        <td>--}}

{{--                                            <p class="text-xm font-weight-lighter mb-0 px-2">{{ $x->OdemeTipi  }}</p>--}}

{{--                                        </td>--}}
{{--                                        <td id="{{ $loop->iteration }}" kid="{{ $x->tarlaID }}">--}}

{{--                                            <p class="text-xm font-weight-bold mb-0 px-2">{{ $x->OdeyenAd }}</p>--}}
{{--                                            <p class="text-xs text-secondary mb-0">{{ $x->OdeyenSoyad }}</p>--}}
{{--                                            <p class="text-xs text-secondary mb-0">{{ $x->tarlaID }}</p>--}}
{{--                                            <script>cc()</script>--}}
{{--                                            <p class="text-xs text-secondary mb-0" id="tname"></p>--}}

{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <p class="text-xs font-weight-bold mb-0 ">{{ $x->parselsayisi }}</p>--}}

{{--                                        </td>--}}

{{--                                        @if($x->OdemeTipi == 'alacak')--}}

{{--                                            <td class="align-middle text-center">--}}
{{--                                                <span class="text-secondary text-xs font-weight-bold">{{ $x->kapora }} ₺</span>--}}
{{--                                            </td>--}}
{{--                                            <td class="align-middle text-center">--}}
{{--                                            </td>--}}
{{--                                        @else()--}}

{{--                                            <td class="align-middle text-center">--}}
{{--                                            </td>--}}
{{--                                            <td class="align-middle text-center">--}}
{{--                                                <span class="text-secondary text-xs font-weight-bold">{{ $x->kapora }} ₺</span>--}}
{{--                                            </td>--}}
{{--                                        @endif--}}

{{--                                        <td class="align-middle">--}}
{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $x->parselfiyati }}</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle">--}}
{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $x->created_at->todatestring() }}</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle">--}}
{{--                                                <span class="text-secondary text-xs font-weight-bold ">Silinmiş</span>--}}
{{--                                                <a href="{{ route('onay.durumu.change' , ['id' => $z->id]) }}"><button type="button" class="btn btn-danger btn-sm btnkia"><i class="fa fa-trash"> iptal</i></button></a>--}}
{{--                                            @else--}}
{{--                                                <span class="text-secondary text-xs font-weight-bold ">Silinip</span>--}}
{{--                                            @endif--}}
{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->onay }}</span>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}

{{--                                @endforeach--}}
{{--<tr>--}}

{{--    <td></td>--}}
{{--    <td></td>--}}
{{--    <td></td>--}}


{{--    @if($toplam2 < 0 )--}}

{{--        <td> </td>--}}
{{--        <td> {{ $toplam2 }} ₺</td>--}}
{{--    @else--}}

{{--        <td> {{ $toplam2 }} ₺</td>--}}
{{--        <td> </td>--}}
{{--    @endif--}}

{{--    <td></td>--}}
{{--    <td></td>--}}
{{--</tr>--}}
{{--                       SILILANLAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAR    END            --}}

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
{{--                    ZZZZZZZZZz--}}
                </div>
                <div class="links">
                    {{ $data->links() }}
                </div>
            </div>

        </div>



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
            .close , .close2 {
                color: white;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus,
            .close2:hover,
            .close2:focus {
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
            .in{
                padding: inherit;
            }
        </style>

        <div id="myModal2" class="modal">

            <!-- Modal content -->

            <div class="modal-content">
                <div class="modal-header" style="direction: rtl; background-color: darkcyan">
                    <span class="close2">&times;</span>
                    <h3>Detay</h3>
                </div>
                <div class="modal-body modalkia">
                    {{--                                        <p>Some text in the Modal Body</p>--}}
                    {{--                                        <p>Some other text...</p>--}}
                    {{--                                            <a href="" id="a1">--}}
                    {{--                                                <button class="btn badge badge-sm bg-gradient-info p-3">Kaporanida sil--}}
                    {{--                                                </button>--}}
                    {{--                                            </a>--}}
                    {{--                                            <a href="" id="a2">--}}
                    {{--                                                <button class="btn badge badge-sm bg-gradient-secondary p-3"--}}
                    {{--                                                        value="bt5">Kapora cibde kalsin--}}
                    {{--                                                </button>--}}
                    {{--                                            </a>--}}


                    <div class="row mobile4">
                        <div class="col-md-6"><label for="">About: </label><div id="d1" class="in"> </div></div>
                        <div class="col-md-6"><label for="">OdemeAciklama: </label><div id="d2" class="in"></div></div>
                        <div class="col-md-6"><label for="">Odeme Sekli:</label><div  id="d3" class="in"></div></div>
                        <div class="col-md-6"><label for="">Odeyen:</label><div  id="d4" class="in"></div></div>
                        <div class="col-md-6"><label for="">OdeyenTc:</label><div id="d5" class="in"></div></div>
                        <div class="col-md-6"><label for="">OdeyenTel:</label><div  id="d6" class="in"></div></div>
                        <div class="col-md-6"><label for="">OdemeTipi:</label><div  id="d7" class="in"></div></div>
                        <div class="col-md-6"><label for="">VadeTarihi:</label><div  id="d8" class="in"></div></div>
                        <div class="col-md-6"><label for="">Yetkili:</label><div  id="d9" class="in"></div></div>
                        <div class="col-md-6"><label for="">Tarih:</label><div  id="d10" class="in"></div></div>
                        <div class="col-md-6"><label for="">kalan:</label><div  id="d11" class="in"></div></div>
                        <div class="col-md-6"><label for="">kapora:</label><div  id="d12" class="in"></div></div>
                        <div class="col-md-6"><label for="">parselfiyati:</label><div  id="d13" class="in"></div></div>
                        <div class="col-md-6"><label for="">parselsayisi:</label><div  id="d14" class="in"></div></div>
                        <div class="col-md-6"><label for="">yapan:</label><div  id="d15" class="in"></div></div>
                        <div class="col-md-6"><label for="">id:</label><div  id="d16" class="in"></div></div>
                    </div>

                    {{--                                        <div class="row">--}}
                    {{--                                            <div class="col-md-6"><label for="">Adres: </label><div id="d1" class="in"> </div></div>--}}
                    {{--                                            <div class="col-md-6"><label for="">Ada/Parsel: </label><div id="d2" class="in"></div></div>--}}
                    {{--                                            <div class="col-md-6"><label for="">ParselSayi:</label><div  id="d3" class="in"></div></div>--}}
                    {{--                                            <div class="col-md-6"><label for="">Sahip:</label><div  id="d4" class="in"></div></div>--}}
                    {{--                                            <div class="col-md-6"><label for="">Sahip TC:</label><div  id="d5" class="in"></div></div>--}}
                    {{--                                            <div class="col-md-6"><label for="">Sahip Tel:</label><div id="d6" class="in"></div></div>--}}
                    {{--                                            <div class="col-md-6"><label for="">Tarla Fiyati:</label><div  id="d7" class="in"></div></div>--}}
                    {{--                                            <div class="col-md-6"><label for="">Pesin:</label><div  id="d8" class="in"></div></div>--}}
                    {{--                                            <div class="col-md-6"><label for="">Tarih:</label><div  id="d9" class="in"></div></div>--}}
                    {{--                                        </div>--}}
                </div>
                {{--                                    <div class="modal-footer">--}}
                {{--                                        <h3>Modal Footer</h3>--}}
                {{--                                    </div>--}}
            </div>

        </div>

        <script>


            // var modal = document.getElementById("myModal");
            //
            // // Get the button that opens the modal
            // // var btn = document.getElementById("myBtn");
            //
            // // Get the <span> element that closes the modal
            // var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            // btn.onclick = function() {
            //     modal.style.display = "block";
            // }

            // When the user clicks on <span> (x), close the modal
            // span.onclick = function () {
            //     modal.style.display = "none";
            // }

            // When the user clicks anywhere outside of the modal, close it









            {{--            let p = document.getElementById('tname');--}}

{{--            // console.log(p);--}}
{{--            // console.log('p');--}}
{{--            fetch("{{ route('tarlas', ['id' => auth()->user()->id]) }}")--}}
{{--            fetch("{{ route('tarlas2') }}")--}}
{{--                .then((response) => {--}}
{{--                    if (response.ok) {--}}
{{--                        return response.json();--}}
{{--                    }--}}
{{--                })--}}
{{--                .then(data => {--}}

{{--                    // const ali = data;--}}
{{--                    // console.log(data[1].konum_id)--}}

{{--                    // for (var i = 0; i < data.length; i++) {--}}
{{--                        // console.log('ya2')--}}
{{--                        // console.log(data[i].konum_id)--}}
{{--                        // let cocktail = data.categories[w3yzid].subCategories[i].name;--}}

{{--                        // if (ko2 == ko){--}}

{{--                    let i = 4--}}
{{--                        // let man = document.createElement("option");--}}
{{--                        let man = document.createElement("span");--}}
{{--                        man.setAttribute("value", data[i].id);--}}
{{--                        // opt2.setAttribute("id", "wid".concat(loop,i));--}}
{{--                        man.setAttribute("id", data[i].id);--}}
{{--                        man.setAttribute("class", data[i].ParselSayisi);--}}
{{--                        man.setAttribute("w3", data[i].ParselSayisi);--}}
{{--                        man.innerHTML = data[i].konum_il + ' / ' + data[i].konum_ilce + ' / '  + data[i].konum_mahalle ;--}}
{{--                        // man.innerHTML = data[i].ParselSayisi + ' Parsel / ' + data[i].konum_ilce + ' / ' + data[i].konum_mahalle + ' ( no ' + [i + 1] + ' )';--}}

{{--                        // if (ko === ko2) { continue; }--}}
{{--                        // var ko2 = ko;--}}
{{--                        p.appendChild(man);--}}

{{--                        // }--}}
{{--                    // }--}}
{{--                });--}}




            function odemeDetay(id) {

                window.onclick = function (event) {

                    if (event.target == modal2) {
                        modal2.style.display = "none";
                        set();
                    }
                    // if(modal2.style.display == "none"){
                    //     set();
                    // }

                }
                var modal2 = document.getElementById("myModal2");
                var span2 = document.getElementsByClassName("close2")[0];
                span2.onclick = function () {
                    set()
                    modal2.style.display = "none";
                }

                modal2.style.display = "block";

                {{--let www = '{{ route('odeme.sil') }}';--}}
                {{--let w3 = www + '?id=' + id + '&kapora=' + 1--}}
                {{--// console.log(w3);--}}
                {{--document.getElementById('a2').setAttribute('href' , w3);--}}

                {{--let www = '{{ route('odeme.sil') }}';--}}
                // let w4 = www + '?id=' + id + '&kapora=' + 0
                // // console.log(w3);
                // document.getElementById('a1').setAttribute('href' , w4);

                let w = "{{ route('odemeDetay') }}" + '/' + id
                fetch(w)
                    .then((response) => {
                        if (response.ok) {
                            return response.json();
                        }
                    })
                    .then(data => {

                        // console.log(data);
                        let man = document.createElement("span");
                        // man.setAttribute("class", 'text-xxs');
                        man.innerHTML = data.About ;
                        document.getElementById('d1').appendChild(man);

                        // console.log(data);
                        let man2 = document.createElement("span");
                        // man2.setAttribute("class", 'text-xxs');
                        man2.innerHTML = data.OdemeAciklama ;
                        document.getElementById('d2').appendChild(man2);

                        let man3 = document.createElement("span");
                        // man3.setAttribute("class", 'text-xxs');
                        man3.innerHTML = data.OdemeSekli ;
                        // man3.innerHTML = data.ParselSayisi + ' / ' + data.SatisDurumu  ;
                        document.getElementById('d3').appendChild(man3);

                        let man4 = document.createElement("span");
                        // man4.setAttribute("class", 'text-xxs');
                        man4.innerHTML = data.OdeyenAd + ' / ' + data.OdeyenSoyad  ;
                        document.getElementById('d4').appendChild(man4);

                        let man5 = document.createElement("span");
                        // man5.setAttribute("class", 'text-xxs');
                        man5.innerHTML = data.OdeyenTc ;
                        document.getElementById('d5').appendChild(man5);

                        let man6 = document.createElement("span");
                        // man6.setAttribute("class", 'text-xxs');
                        man6.innerHTML = data.OdeyenTel  ;
                        document.getElementById('d6').appendChild(man6);

                        let man7 = document.createElement("span");
                        // man7.setAttribute("class", 'text-xxs');
                        man7.innerHTML = data.OdemeTipi;
                        document.getElementById('d7').appendChild(man7);

                        let man8 = document.createElement("span");
                        // man8.setAttribute("class", 'text-xxs');
                        man8.innerHTML = data.VadeTarihi  ;
                        document.getElementById('d8').appendChild(man8);

                        let man9 = document.createElement("span");
                        // man9.setAttribute("class", 'text-xxs');
                        man9.innerHTML = data.Yetkili  ;
                        document.getElementById('d9').appendChild(man9);

                        let man10 = document.createElement("span");
                        // man10.setAttribute("class", 'text-xxs');
                        man10.innerHTML = data.created_at  ;
                        document.getElementById('d10').appendChild(man10);


                        let man11 = document.createElement("span");
                        // man11.setAttribute("class", 'text-xxs');
                        man11.innerHTML = data.kalan  ;
                        document.getElementById('d11').appendChild(man11);




                        let man12 = document.createElement("span");
                        // man12.setAttribute("class", 'text-xxs');
                        man12.innerHTML = data.kapora  ;
                        document.getElementById('d12').appendChild(man12);


                        let man13 = document.createElement("span");
                        // man13.setAttribute("class", 'text-xxs');
                        man13.innerHTML = data.parselfiyati  ;
                        document.getElementById('d13').appendChild(man13);


                        let man14 = document.createElement("span");
                        // man14.setAttribute("class", 'text-xxs');
                        man14.innerHTML = data.parselsayisi  ;
                        document.getElementById('d14').appendChild(man14);

                        let man15 = document.createElement("span");
                        // man15.setAttribute("class", 'text-xxs');
                        man15.innerHTML = data.yapan  ;
                        document.getElementById('d15').appendChild(man15);

                        let man16 = document.createElement("span");
                        // man16.setAttribute("class", 'text-xxs');
                        man16.innerHTML = data.id  ;
                        document.getElementById('d16').appendChild(man16);

                    });

            }

            function set(){
                document.getElementById('d1').innerHTML = '';
                document.getElementById('d2').innerHTML = '';
                document.getElementById('d3').innerHTML = '';
                document.getElementById('d4').innerHTML = '';
                document.getElementById('d5').innerHTML = '';
                document.getElementById('d6').innerHTML = '';
                document.getElementById('d7').innerHTML = '';
                document.getElementById('d8').innerHTML = '';
                document.getElementById('d9').innerHTML = '';
                document.getElementById('d10').innerHTML = '';
                document.getElementById('d11').innerHTML = '';
                document.getElementById('d12').innerHTML = '';
                document.getElementById('d13').innerHTML = '';
                document.getElementById('d14').innerHTML = '';
                document.getElementById('d15').innerHTML = '';
                document.getElementById('d16').innerHTML = '';
            }



            for (var i = 1; i < 20; i++) {


                // agar ashagi da delete ya silinen olsa chalishir VA NORMAL DA AKTIVIDE
                if (!document.getElementById(i)){
                    // console.log('p');
                    break
                }

            let p = document.getElementById(i);
            let q = p.getAttribute('kid');
            let o = q - 1;



                // console.log(o);

            {{--            fetch("{{ route('tarlas', ['id' => auth()->user()->id]) }}")--}}
            fetch("{{ route('tarlas2') }}")
                .then((response) => {
                    if (response.ok) {
                        return response.json();
                    }
                })
                .then(data => {

                    // const ali = data;
                    // console.log(data[1].konum_id)

                    // for (var i = 0; i < data.length; i++) {
                    // console.log('ya2')
                    // console.log(data[i].konum_id)
                    // let cocktail = data.categories[w3yzid].subCategories[i].name;

                    // if (ko2 == ko){

                    // let i = 4
                    // let man = document.createElement("option");
                    let man = document.createElement("div");
                    man.setAttribute("class", 'text-xxs');
                    man.innerHTML = data[o].konum_il + ' / ' + data[o].konum_ilce + ' / '  + data[o].konum_mahalle ;
                    // man.innerHTML = data[i].ParselSayisi + ' Parsel / ' + data[i].konum_ilce + ' / ' + data[i].konum_mahalle + ' ( no ' + [i + 1] + ' )';

                    // if (ko === ko2) { continue; }
                    // var ko2 = ko;
                    p.appendChild(man);

                    // }
                    // }
                });

            }




            // tarla adini secip va yerine koyiyor jadvalda
        {{--for (var i = 1; i < 20; i++) {--}}
        {{--    --}}
        {{--    let r = 'z' + i;--}}
        {{--    let p = document.getElementById(r);--}}
        {{--    if (!p){--}}
        {{--        break--}}
        {{--    }--}}


        {{--    let q = p.getAttribute('zid');--}}
        {{--    let o = q - 1;--}}
        {{--    --}}
        {{--    fetch("{{ route('tarlas2') }}")--}}
        {{--        .then((response) => {--}}
        {{--            if (response.ok) {--}}
        {{--                return response.json();--}}
        {{--            }--}}
        {{--        })--}}
        {{--        .then(data => {--}}

        {{--            // let i = 4--}}
        {{--            // let man = document.createElement("option");--}}
        {{--            let man = document.createElement("div");--}}
        {{--            man.setAttribute("class", 'text-xxs');--}}
        {{--            man.innerHTML = data[o].konum_il + ' / ' + data[o].konum_ilce + ' / '  + data[o].konum_mahalle ;--}}
        {{--            p.appendChild(man);--}}

        {{--        });--}}
        {{--}--}}


        </script>
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
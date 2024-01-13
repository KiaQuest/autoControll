@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Odeme table (max = 20)</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            #</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tip</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            tarla</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Parsel sayi</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Alacak</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Verecek</th>
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
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
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
                                @foreach($data as $z)
                                    <tr  style="background-color: {{ $z->OdemeTipi == 'alacak' ? '#7fffab50' : '#fdefdc' }}">
                                        <td>

                                            <p class="text-xm font-weight-lighter mb-0 px-2">{{ $loop->iteration  }}</p>

                                        </td>
                                        <td>

                                            <p class="text-xm font-weight-lighter mb-0 px-2">{{ $z->OdemeTipi  }}</p>

                                        </td>
                                        <td id="z{{ $loop->iteration }}" zid="{{ $z->tarlaID }}">
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
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->parselsayisi }}</span>
                                        </td>
                                        @if($z->OdemeTipi == 'alacak')

                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{ $z->kapora }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                            </td>
                                        @else()

                                            <td class="align-middle text-center">
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{ $z->kapora }}</span>
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
                                        <td class="align-middle">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->created_at->todatestring() }}</span>
                                        </td>
                                        <td class="align-middle">
{{--                                            @if($z->delete == 0)--}}
                                                <span class="text-secondary text-xs font-weight-bold ">Onaylanmiş</span>
                                                <a href="{{ route('onay.durumu.change' , ['id' => $z->id]) }}"><button type="button" class="btn btn-danger btn-sm btnkia"><i class="fa fa-trash"> iptal</i></button></a>
{{--                                            @else--}}
{{--                                                <span class="text-secondary text-xs font-weight-bold ">Silinip</span>--}}
{{--                                            @endif--}}
{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->onay }}</span>--}}
                                        </td>
                                    </tr>

                                @endforeach

<tr>
    <td></td>
    <td></td>
    <td>Toplam </td>
    <td> {{ $toplam }}</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>

<tr>
    <td>
        vade
    </td>
</tr>

@foreach($vade as $z)
    <tr  style="background-color: {{ $z->OdemeTipi == 'alacak' ? '#7fffab50' : '#fdefdc' }}">
        <td>

            <p class="text-xm font-weight-lighter mb-0 px-2">{{ $loop->iteration  }}</p>

        </td>
        <td>

            <p class="text-xm font-weight-lighter mb-0 px-2">{{ $z->OdemeTipi  }}</p>

        </td>
        <td id="z{{ $loop->iteration }}" zid="{{ $z->tarlaID }}">

        </td>
        <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">{{ $z->parselsayisi }}</span>
        </td>
        @if($z->OdemeTipi == 'alacak')

            <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">{{ $z->kapora }}</span>
            </td>
            <td class="align-middle text-center">
            </td>
        @else()

            <td class="align-middle text-center">
            </td>
            <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">{{ $z->kapora }}</span>
            </td>
        @endif
        <td class="align-middle">
            <span class="text-secondary text-xs font-weight-bold">{{ $z->created_at->todatestring() }}</span>
        </td>
        <td class="align-middle">
            {{--                                            @if($z->delete == 0)--}}
            <span class="text-secondary text-xs font-weight-bold ">Onaylanmiş</span>
            <a href="{{ route('vade.onay.sil' , ['id' => $z->id]) }}"><button type="button" class="btn btn-danger btn-sm btnkia"><i class="fa fa-trash"> iptal</i></button></a>
            {{--                                            @else--}}
            {{--                                                <span class="text-secondary text-xs font-weight-bold ">Silinip</span>--}}
            {{--                                            @endif--}}
            {{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->onay }}</span>--}}
        </td>
    </tr>

@endforeach
<tr>
    <td>sililanlar</td>

{{--    <script>--}}



{{--        function cc(){--}}

{{--            let g = document.getElementById('bname');--}}

{{--            let man = document.createElement("span");--}}
{{--            man.innerHTML = 's2' ;--}}
{{--            g.appendChild(man);--}}
{{--        }--}}


{{--        </script>--}}
</tr>
                                @foreach($sililanlar as $x)
                                    <tr  style="background-color: {{ $x->OdemeTipi == 'alacak' ? '#7fffab50' : '#fdefdc' }}">
                                        <td>

                                            <p class="text-xm font-weight-lighter mb-0 px-2">{{ $loop->iteration  }}</p>

                                        </td>
                                        <td>

                                            <p class="text-xm font-weight-lighter mb-0 px-2">{{ $x->OdemeTipi  }}</p>

                                        </td>
                                        <td id="{{ $loop->iteration }}" kid="{{ $x->tarlaID }}">

{{--                                            <p class="text-xm font-weight-bold mb-0 px-2">{{ $x->OdeyenAd }}</p>--}}
{{--                                            <p class="text-xs text-secondary mb-0">{{ $x->OdeyenSoyad }}</p>--}}
{{--                                            <p class="text-xs text-secondary mb-0">{{ $x->tarlaID }}</p>--}}
{{--                                            <script>cc()</script>--}}
{{--                                            <p class="text-xs text-secondary mb-0" id="tname"></p>--}}

                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0 ">{{ $x->parselsayisi }}</p>

                                        </td>

                                        @if($x->OdemeTipi == 'alacak')

                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{ $x->kapora }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                            </td>
                                        @else()

                                            <td class="align-middle text-center">
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{ $x->kapora }}</span>
                                            </td>
                                        @endif

{{--                                        <td class="align-middle">--}}
{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $x->parselfiyati }}</span>--}}
{{--                                        </td>--}}
                                        <td class="align-middle">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $x->created_at->todatestring() }}</span>
                                        </td>
                                        <td class="align-middle">
                                                <span class="text-secondary text-xs font-weight-bold ">Silinmiş</span>
{{--                                                <a href="{{ route('onay.durumu.change' , ['id' => $z->id]) }}"><button type="button" class="btn btn-danger btn-sm btnkia"><i class="fa fa-trash"> iptal</i></button></a>--}}
{{--                                            @else--}}
{{--                                                <span class="text-secondary text-xs font-weight-bold ">Silinip</span>--}}
{{--                                            @endif--}}
{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $z->onay }}</span>--}}
                                        </td>
                                    </tr>

                                @endforeach
<tr>
    <td></td>
    <td></td>
    <td>Toplam </td>
    <td> {{ $toplam2 }}</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>


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
                </div>
            </div>
        </div>


        <script>



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




            for (var i = 1; i < 20; i++) {


                if (!document.getElementById(i)){
                    break
                }
            let p = document.getElementById(i);
            let q = p.getAttribute('kid');
            let o = q - 1;



                // console.log(o);
            // console.log('p');
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




for (var i = 1; i < 20; i++) {


    let r = 'z' + i;
    let p = document.getElementById(r);

    if (!p){
        break
    }
    let q = p.getAttribute('zid');
    let o = q - 1;

    fetch("{{ route('tarlas2') }}")
        .then((response) => {
            if (response.ok) {
                return response.json();
            }
        })
        .then(data => {

            // let i = 4
            // let man = document.createElement("option");
            let man = document.createElement("div");
            man.setAttribute("class", 'text-xxs');
            man.innerHTML = data[o].konum_il + ' / ' + data[o].konum_ilce + ' / '  + data[o].konum_mahalle ;
            p.appendChild(man);

        });

}


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

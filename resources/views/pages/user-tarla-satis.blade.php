@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tarla Satişi'])

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
                            Tarla satiş sayfasi
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

                    <form role="form" method="POST"
                          action={{ route('tarla.satis.post') }} enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Tarla Satışı</p>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Tarla Bilgisi</p>
{{--                            <p class="text-uppercase text-sm">User In<a href="{{ route('tarlas', ['id' => auth()->user()->id]) }}">f</a>ormation</p>--}}
                            <div class="row">
                                <div class="form-group">


                                    <div class="row">

{{--                                        <a href="{{ route('tarlas', ['id' => auth()->user()->id]) }}"> 554</a>--}}
                                        <div class="col-md-12">
                                            <label for="cars">Tarlalarim : <span class="req">*</span></label>

                                            <select name="tarlaID" id="tarlas" class="form-control" required>
                                                <option value="" disabled selected>Seçin...</option>

                                            </select>
                                        </div>

                                        <input type="hidden" name="OdemeTipi" value="alacak">

                                        {{--                                        <div class="col-md-4">--}}
                                        {{--                                            <label for="konum_il">İl</label>--}}
                                        {{--                                            <select name="konum_il" id="konum_il" class="form-control">--}}
                                        {{--                                                <option value="">Seçin...</option>--}}
                                        {{--                                                <option value="2">Seçin 2</option>--}}
                                        {{--                                            </select>--}}
                                        {{--                                        </div>--}}

                                        {{--                                        <div class="col-md-4">--}}
                                        {{--                                            <label for="konum_ilce">İlçe</label>--}}
                                        {{--                                            <select name="konum_ilce" id="konum_ilce" class="form-control" disabled="disabled">--}}
                                        {{--                                                <option value="">Seçin...</option>--}}
                                        {{--                                            </select>--}}
                                        {{--                                        </div>--}}

                                        {{--                                        <div class="col-md-4">--}}
                                        {{--                                            <label for="konum_mahalle">Mahalle</label>--}}
                                        {{--                                            <select name="konum_mahalle" id="konum_mahalle" class="form-control" disabled="disabled">--}}
                                        {{--                                                <option value="">Seçin...</option>--}}
                                        {{--                                            </select>--}}
                                        {{--                                        </div>--}}
                                    </div>

                                    <style>
                                        .req {
                                            margin: .5rem;
                                            color: coral;
                                        }
                                    </style>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="parsels">Satilan Parsel Sayi <span class="req">*</span></label>
{{--                                            <input type="number" name="parselsayisi" id="parsels" class="form-control"--}}
{{--                                                   required>--}}

{{--                                            <label for="cars">Choose a car:</label>--}}

                                            <select id="parsels" class="form-control" name="parselsayisi">
                                                <option value="" disabled selected>Seçin...</option>
{{--                                                <option value="kart">kart</option>--}}

                                            </select>

                                        </div>

                                        <input type="hidden" name="parselcheck" id="parselcheck" class="form-control">

                                        <div class="col-md-6">
                                            <label for="parsels">Parsel Fiyati <span class="req">*</span></label>
                                            <input type="text" name="parselfiyati" id="parsels" class="form-control" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <label for="kapora">Kapora <span class="req">*</span></label>
                                            <input type="number" name="kapora" id="kapora" class="form-control" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="kalan">Kalan</label>
                                            <input type="number" name="kalan" id="kalan" class="form-control">
                                        </div>

                                    </div>


                                    <br><br>
                                    <p class="text-uppercase text-sm">Kime satdi <span class=" text-xxs opacity-5 px-2">Yeni müştery</span>
                                    </p>
                                    {{--                                    <p class=" text-xs opacity-5">Yeni müştery</p>--}}

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label" for="müşteryad">müştery Adi <span
                                                    class="req"> * </span></label>
                                            <input name="OdeyenAd" type="text" class="form-control" id="müşteryad">
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="müşterysoyad">müştery Soyadi</label>
                                            <input name="OdeyenSoyad" type="text" class="form-control"
                                                   id="müşterysoyad">
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="OdeyenTc">müştery TC</label>
                                            <input name="OdeyenTc" type="text" class="form-control" id="OdeyenTc">
                                        </div>


                                        <div class="col-md-4">
                                            <label class="form-label" for="müşterytel">müştery Telefon</label>
                                            <input name="OdeyenTel" type="text" class="form-control" id="müşterytel">
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="VadeTarihi">Vade Tarihi</label>
                                            <input name="VadeTarihi" type="date" class="form-control col-md-4" id="VadeTarihi">
                                            {{--                                        <input name="__Invariant" type="hidden" value="VadeTarihi">--}}
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="OdemeSekli">OdemeSekli</label><span class="req">*</span>
                                            <select class="form-control " name="OdemeSekli" id="OdemeSekli" required>
                                                <option value="" disabled selected>Seçin...</option>
                                                <option value="kart">kart</option>
                                                <option value="nakit">nakit</option>
                                                <option value="havale">havale</option>
                                                <option value="araba">Araba</option>
                                                <option value="cek">Çek</option>
                                                <option value="tapu">Senet (tapu)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>


                                        <div class="form-group" id="ustu" style="display: none" >

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label" for="marka">Marka</label><span class="req">*</span>
                                                    <input name="marka" type="text" class="form-control col-md-4" id="marka">
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label" for="model">Yil</label>
                                                    <input name="model" type="text" class="form-control col-md-4" id="model">
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label" for="km">Kilometre</label>
                                                    <input name="km" type="text" class="form-control col-md-4" id="km">
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label" for="fiyat">Fiyat</label><span class="req">*</span>
                                                    <input name="fiyat" type="text" class="form-control col-md-4" id="fiyat" required>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="form-label" for="about">Aciklama</label><span class="req">*</span>
                                                    <input name="about" type="text" class="form-control col-md-4" id="about">
                                                </div>
                                            </div>
                                            <br>
                                            {{--{{ dd($data) }}--}}
{{--                                            <select name="ust" id="ust" class="form-control" style="appearance:button" required disabled>--}}
{{--                                                <option disabled selected value> -- kimin altı -- </option>--}}

{{--                                                @foreach($data as $z)--}}
{{--                                                    <option value="{{ $z->id }}">{{ $z->username }}</option>--}}
{{--                                                @endforeach--}}

{{--                                            </select>--}}
                                            {{--                                        <input class="form-control" type="email" name="email" value="{{ old('email', auth()->user()->email) }}">--}}
                                        </div>
                                        <br>


                                    <label class="form-label" for="OdemeAciklama"> Odeme Açıklaması</label>
                                    <input name="OdemeAciklama" type="text" class="form-control" id="OdemeAciklama">

                                    <br><br>
                                    <p class="text-uppercase text-sm">satiş detayi</p>


                                    {{--                                    <div class="row">--}}

                                    {{--                                        <div class="col-md-4">--}}
                                    {{--                                            <label for="parsels">Kapora</label>--}}
                                    {{--                                            <input type="text" name="kapora" id="parsels" class="form-control">--}}
                                    {{--                                        </div>--}}


                                    {{--                                        <div class="col-md-4">--}}
                                    {{--                                            <label for="cars">Takas :</label>--}}

                                    {{--                                            <select name="takas" id="tarlas" class="form-control">--}}
                                    {{--                                                <option value="" disabled selected>Seçin...</option>--}}
                                    {{--                                                <option value="araba">Araba</option>--}}
                                    {{--                                                <option value="cek">Çek</option>--}}
                                    {{--                                                <option value="tapu">Senet (tapu)</option>--}}

                                    {{--                                            </select>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}


                                    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
                                            integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
                                            crossorigin="anonymous"></script>


                                    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

                                    <script>
                                        $(function () {
                                            $("input[name='model']").on('input', function (e) {
                                                $(this).val($(this).val().replace(/[^0-9]/g, ''));
                                            });
                                        });

                                        $(function () {
                                            $("input[name='parselfiyati']").on('input', function (e) {
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

                                        $(function () {
                                            $("input[name='OdeyenTc']").on('input', function (e) {
                                                $(this).val($(this).val().replace(/[^0-9]/g, ''));
                                            });
                                        });

                                        $(function () {
                                            $("input[name='OdeyenTel']").on('input', function (e) {
                                                $(this).val($(this).val().replace(/[^0-9]/g, ''));
                                            });
                                        });


                                        let a = document.getElementById('OdemeSekli');
                                        let head = document.getElementById('ustu');

                                        // console.log('ff3');
                                        a.addEventListener('change', function () {
                                            // console.log(head);
                                            // console.log(this.value);

                                            // head.style.display = 'initial';
                                            if (this.value == 'araba'){
                                                // console.log('dzdz');

                                                head.style.display = 'initial';
                                                document.getElementById('fiyat').removeAttribute("disabled");

                                            }else {

                                                // tik();
                                                head.style.display = 'none';
                                                document.getElementById('fiyat').setAttribute("disabled" , true);
                                                document.getElementById('fiyat').removeAttribute("required");

                                            }

                                            if (this.value == 'cek' || this.value == 'tapu' ){
                                                document.getElementById('VadeTarihi').setAttribute("required" , true);
                                            }else {
                                                document.getElementById('VadeTarihi').removeAttribute("required");
                                            }
                                        });


                                        // a.setAttribute("onchange", console.log('yuhahahahaha'));
                                        // console.log('yalla2');


                                        // function tik(){
                                        //     let per = document.getElementById('tik');
                                        //     per.innerHTML = '&#x2705';
                                        // }

                                    </script>

{{--                                    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>--}}


                                    <script>


                                        let p = document.getElementById('tarlas');

                                        // console.log(p);
{{--                                        let ww = {{ route('tarlas', [auth()->user()->id .'/'. auth()->user()->ust ]) }};--}}
//                                         console.log('ww');
                                        let yy = 'http://127.0.0.1:8000/api/tarlalarim/'
                                        let q1 = {{ auth()->user()->id }};
                                        let q2 = '/';
                                        let q3 = {{ auth()->user()->ust  }};
                                        // console.log(yy+q1+q2+q3)
{{--                                        let uu = {{ auth()->user()->id .'/'. auth()->user()->ust  }};--}}
//                                         let jj = yy.concat(uu);
//                                         console.log(q5)
//                                         console.log(jj)
                                        fetch(yy+q1+q2+q3)
{{--                                        fetch("{{ route('tarlas', [auth()->user()->id .'/'. auth()->user()->ust ]) }}")--}}
                                            .then((response) => {
                                                if (response.ok) {
                                                    return response.json();
                                                }
                                            })
                                            .then(data => {

                                                console.log('ya')

                                                // const ali = data;
                                                // console.log(data[1].konum_id)

                                                for (var i = 0; i < data.length; i++) {
                                                    // console.log('ya2')
                                                    // console.log(data[i].konum_id)
                                                    // let cocktail = data.categories[w3yzid].subCategories[i].name;

                                                    var ko = data[i].konum_il;
// console.log('1')

                                                    // if (ko2 == ko){


                                                    let man = document.createElement("option");
                                                    man.setAttribute("value", data[i].id);
                                                    // opt2.setAttribute("id", "wid".concat(loop,i));
                                                    man.setAttribute("id", data[i].id);
                                                    man.setAttribute("class", data[i].ParselSayisi);
                                                    man.setAttribute("w3", data[i].ParselSayisi);
                                                    man.innerHTML = data[i].ParselSayisi + ' Parsel / ' + data[i].konum_ilce + ' / ' + data[i].konum_mahalle + ' ( no ' + [i + 1] + ' )';

                                                    // if (ko === ko2) { continue; }
                                                    // var ko2 = ko;
                                                    p.appendChild(man);

                                                    // }
                                                }
                                            });

                                        p.addEventListener('change', function () {
                                            console.log('dzzzz')
                                            // let lo = 'loop';
                                            // let num = 1;
                                            // let loop = lo.concat(num);
                                            document.getElementById('parsels').innerHTML = '';

                                            // var w3yzid = document.getElementById(this.value).getAttribute('w3yz-id');
                                            // console.log(document.getElementById('brow').id);
                                            let value = this.value;
                                            let parselSayisi = document.getElementById(value).getAttribute('w3');
                                            // console.log(parsel);
                                            // let oo = $( "#tarlas option:selected" ).text();
                                            // console.log(parselSayisi);

                                            // document.getElementById('parsels').setAttribute('value', parselSayisi);

                                            for (var i = 1; i <= parselSayisi; i++) {
                                                // var sec2 = data[i].konum_ilce;


                                                let sec = document.createElement("option");
                                                sec.setAttribute("value", i);
                                                // sec.setAttribute("kid", data[i].konum_id);
                                                // sec.setAttribute("class", data[i].konum_ilce);
                                                // sec.setAttribute("id", data[i].konum_id);
                                                sec.innerHTML = i;

                                                // if (sec2 === sec3) {
                                                //     continue;
                                                // }
                                                // if (data[i].konum_il != data[fin].konum_il) {
                                                //     break;
                                                // }
                                                // var sec3 = sec2;
                                                // let p = document.getElementById('konum_ilce');
                                                document.getElementById('parsels').appendChild(sec);

                                            }
                                            // getElementsByClassName(names)

                                            // console.log(document.getElementById('konum_il').getAttribute('kid'));
                                            // console.log(document.getElementsByClassName(this.value)[0].getAttribute('kid'));
                                            // let id = document.getElementsByClassName(this.value)[0].getAttribute('kid');
                                            // let id = document.getElementById('tarlas');
                                            // console.log(id);
                                            // let red = parseInt(id)
                                            // let fin = red - 1

                                            // console.log('3')
                                            // console.log(fin);
                                            // document.getElementById('konum_ilce').removeAttribute("disabled");


                                            {{--fetch("{{ route('konum') }}")--}}
                                            {{--    .then((response) => {--}}
                                            {{--        if (response.ok) {--}}
                                            {{--            return response.json();--}}
                                            {{--        }--}}
                                            {{--    })--}}
                                            {{--    .then(data => {--}}

                                            {{--        console.log(data[fin])--}}
                                            {{--        // console.log('4')--}}
                                            {{--        // console.log('4dddd')--}}
                                            {{--        // const lopo = '4545'--}}
                                            {{--        // console.log(lopo)--}}

                                            {{--        for (var i = fin; i < data.length; i++) {--}}
                                            {{--            var sec2 = data[i].konum_ilce;--}}


                                            {{--            let sec = document.createElement("option");--}}
                                            {{--            sec.setAttribute("value", data[i].konum_ilce);--}}
                                            {{--            sec.setAttribute("kid", data[i].konum_id);--}}
                                            {{--            sec.setAttribute("class", data[i].konum_ilce);--}}
                                            {{--            // sec.setAttribute("id", data[i].konum_id);--}}
                                            {{--            sec.innerHTML = data[i].konum_ilce;--}}

                                            {{--            if (sec2 === sec3) {--}}
                                            {{--                continue;--}}
                                            {{--            }--}}
                                            {{--            if (data[i].konum_il != data[fin].konum_il) {--}}
                                            {{--                break;--}}
                                            {{--            }--}}
                                            {{--            var sec3 = sec2;--}}
                                            {{--            // let p = document.getElementById('konum_ilce');--}}
                                            {{--            document.getElementById('konum_ilce').appendChild(sec);--}}

                                            {{--        }--}}

                                            {{--    });--}}


                                            // fetch('https://example.com?' + new URLSearchParams({
                                            //     foo: 'value',
                                            //     bar: 2,
                                            // }))
                                        });


                                        {{--document.getElementById('konum_ilce').addEventListener('change', function () {--}}


                                        {{--    // console.log('dzzzz')--}}
                                        {{--    // let lo = 'loop';--}}
                                        {{--    // let num = 1;--}}
                                        {{--    // let loop = lo.concat(num);--}}

                                        {{--    // var w3yzid = document.getElementById(this.value).getAttribute('w3yz-id');--}}
                                        {{--    // console.log(document.getElementById('brow').id);--}}


                                        {{--    // console.log(lopo)--}}
                                        {{--    var w3 = document.getElementsByClassName(this.value)[0].getAttribute('kid');--}}
                                        {{--    // let value = this.id;--}}
                                        {{--    let red = parseInt(w3)--}}
                                        {{--    let fin = red - 1--}}

                                        {{--    // console.log('3')--}}
                                        {{--    // console.log(value)--}}
                                        {{--    // console.log(fin);--}}
                                        {{--    document.getElementById('konum_mahalle').removeAttribute("disabled");--}}

                                        {{--    console.log('geldi')--}}
                                        {{--    fetch("{{ route('konum') }}")--}}
                                        {{--        .then((response) => {--}}
                                        {{--            if (response.ok) {--}}
                                        {{--                return response.json();--}}
                                        {{--            }--}}
                                        {{--        })--}}
                                        {{--        .then(data => {--}}

                                        {{--            console.log(data[fin])--}}
                                        {{--            // console.log('4')--}}

                                        {{--            for (var i = fin; i < data.length; i++) {--}}
                                        {{--                var sec3 = data[i].konum_ilce;--}}


                                        {{--                let sec4 = document.createElement("option");--}}
                                        {{--                sec4.setAttribute("value", data[i].konum_mahalle);--}}
                                        {{--                sec4.innerHTML = data[i].konum_mahalle;--}}

                                        {{--                // if (sec3 === sec5) { continue; }--}}
                                        {{--                if (data[i].konum_ilce != data[fin].konum_ilce) {--}}
                                        {{--                    break;--}}
                                        {{--                }--}}
                                        {{--                // var sec5 = sec3;--}}
                                        {{--                // let p = document.getElementById('konum_ilce');--}}
                                        {{--                document.getElementById('konum_mahalle').appendChild(sec4);--}}

                                        {{--            }--}}

                                        {{--        });--}}


                                        {{--    // fetch('https://example.com?' + new URLSearchParams({--}}
                                        {{--    //     foo: 'value',--}}
                                        {{--    //     bar: 2,--}}
                                        {{--    // }))--}}


                                        {{--});--}}

                                        // TEKRAR--START


                                        // TEKRAR--FINISH


                                        // TEKRAR--START 2


                                        // TEKRAR--FINISH 2


                                        // TEKRAR--START 3


                                        // TEKRAR--FINISH 3


                                        // TEKRAR--START 4

                                        // function addInput5(loop, num, w3yzid, w3yzid2, w3yzid3, w3yzid4, w3yzid5) {
                                        //
                                        //     let z = document.getElementsByName(loop)[0];
                                        //     z.addEventListener('change', function () {
                                        //
                                        //         let lo = 'loop';
                                        //         let n = 1;
                                        //         let loopNUM = n + num;
                                        //         let loop = lo.concat(loopNUM);
                                        //
                                        //         var w3yzid6 = document.getElementById(this.value).getAttribute('w3yz-id');
                                        //
                                        //         fetch("getCategoryAPI.php")
                                        //             .then((response) => {
                                        //                 if (response.ok) {
                                        //                     return response.json();
                                        //                 }
                                        //             })
                                        //             .then(data => {
                                        //
                                        //                 if (typeof data.categories[w3yzid].subCategories[w3yzid2].subCategories[w3yzid3].subCategories[w3yzid4].subCategories[w3yzid5].subCategories[w3yzid6].subCategories[0] != 'undefined') {
                                        //
                                        //                     let para = document.createElement("input");
                                        //                     para.setAttribute("list", loop);
                                        //                     para.setAttribute("class", 'form-control');
                                        //                     para.type = "text";
                                        //                     para.name = loop;
                                        //
                                        //
                                        //                     let dl = document.createElement('datalist');
                                        //                     dl.id = loop;
                                        //
                                        //                     for (var i = 0; i < data.categories[w3yzid].subCategories[w3yzid2].subCategories[w3yzid3].subCategories[w3yzid4].subCategories[w3yzid5].subCategories[w3yzid6].subCategories.length; i++) {
                                        //
                                        //                         let cocktail = data.categories[w3yzid].subCategories[w3yzid2].subCategories[w3yzid3].subCategories[w3yzid4].subCategories[w3yzid5].subCategories[w3yzid6].subCategories[i].name;
                                        //
                                        //                         let opt2 = document.createElement("option");
                                        //                         opt2.setAttribute("value", cocktail);
                                        //                         opt2.setAttribute("class", loop);
                                        //                         opt2.setAttribute("id", cocktail);
                                        //                         opt2.setAttribute("w3yz-id", i);
                                        //                         opt2.innerHTML = cocktail;
                                        //
                                        //                         dl.appendChild(opt2);
                                        //                     }
                                        //
                                        //                     para.appendChild(dl);
                                        //                     document.getElementById('p'.concat(loop)).appendChild(para);
                                        //
                                        //                     // return;
                                        //                     // addInput3()
                                        //
                                        //                 } else {
                                        //
                                        //
                                        //                     let urunID = data.categories[w3yzid].subCategories[w3yzid2].subCategories[w3yzid3].subCategories[w3yzid4].subCategories[w3yzid5].subCategories[w3yzid6].id;
                                        //                     let anaID = data.categories[w3yzid].id;
                                        //
                                        //                     let para = document.createElement("input");
                                        //                     para.setAttribute("value", urunID);
                                        //                     para.type = "hidden";
                                        //                     para.name = "urunID";
                                        //
                                        //                     let adaInput = document.createElement("input");
                                        //                     adaInput.setAttribute("value", anaID);
                                        //                     adaInput.type = "hidden";
                                        //                     adaInput.name = "anaID";
                                        //
                                        //                     document.getElementById('urun').appendChild(para);
                                        //                     document.getElementById('ana').appendChild(adaInput);
                                        //                     attribute(urunID);
                                        //                     tik();
                                        //                 }
                                        //             });
                                        //     });
                                        // }


                                    </script>


                                    {{--                                    <label class="form-label" for="Ada">Ada</label>--}}
                                    {{--                                <input name="Ada" type="number" class="form-control" data-val="true" data-val-number="The field Ada must be a number." data-val-required="'Ada' must not be empty." id="Ada"><input name="__Invariant" type="hidden" value="Ada">--}}
                                    {{--                                <span class="text-danger field-validation-valid" data-valmsg-for="Ada" data-valmsg-replace="true"></span><br>--}}

                                    {{--                                <label class="form-label" for="Parsel">Parsel</label>--}}
                                    {{--                                <input name="Parsel" type="number" class="form-control" required="" data-val="true" data-val-number="The field Parsel must be a number." data-val-required="'Parsel' must not be empty." id="Parsel" value="0"><input name="__Invariant" type="hidden" value="Parsel">--}}
                                    {{--                                <span class="text-danger field-validation-valid" data-valmsg-for="Parsel" data-valmsg-replace="true"></span><br>--}}

                                    {{--                                <label class="form-label" for="MetreKare">MetreKare</label>--}}
                                    {{--                                <input name="MetreKare" type="number" class="form-control" required="" data-val="true" data-val-number="The field MetreKare must be a number." data-val-required="'Metre Kare' must not be empty." id="MetreKare" value="0"><input name="__Invariant" type="hidden" value="MetreKare">--}}
                                    {{--                                <span class="text-danger field-validation-valid" data-valmsg-for="MetreKare" data-valmsg-replace="true"></span><br>--}}

                                    {{--                                <label class="form-label" for="ParselSayisi">Kaç Parsele Bölündü</label>--}}
                                    {{--                                <input name="ParselSayisi" type="number" class="form-control" required="" data-val="true" data-val-number="The field ParselSayisi must be a number." data-val-required="'Parsel Sayisi' must not be empty." id="ParselSayisi" value="0"><input name="__Invariant" type="hidden" value="ParselSayisi">--}}
                                    {{--                                <span class="text-danger field-validation-valid" data-valmsg-for="ParselSayisi" data-valmsg-replace="true"></span><br>--}}

                                    {{--                                <label class="form-label" for="Durum">Durum</label>--}}
                                    {{--                                <select class="form-control" name="Durum" required="" data-val="true" data-val-required="'Durum' must not be empty." id="Durum">--}}
                                    {{--                                    <option value="Aktif" selected="selected">Aktif</option>--}}
                                    {{--                                    <option value="Pasif">Pasif</option>--}}

                                    {{--                                </select>--}}
                                    {{--                                <span class="text-danger field-validation-valid" data-valmsg-for="Durum" data-valmsg-replace="true"></span><br>--}}

                                    {{--                                <label class="form-label" for="SatisDurumu">SatisDurumu</label>--}}
                                    {{--                                <select class="form-control" name="SatisDurumu" required="" data-val="true" data-val-required="'Satis Durumu' must not be empty." id="SatisDurumu">--}}

                                    {{--                                    <option value="satilmadi">Satışta Değil</option>--}}
                                    {{--                                    <option value="satiliyor" selected="selected">Satışta</option>--}}

                                    {{--                                </select>--}}
                                    {{--                                <span class="text-danger field-validation-valid" data-valmsg-for="SatisDurumu" data-valmsg-replace="true"></span><br>--}}

                                    {{--                                <label class="form-label">Tarla Fotoğraf</label>--}}
                                    {{--                                <input name="files" type="file" class="form-control" multiple="" ><br>--}}



                                    {{--                                <div class="card">--}}
                                    {{--                                    <div class="card-header">--}}
                                    {{--                                        <h4>Tarla Sahip Bilgileri</h4>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="card-body">--}}
                                    {{--                                        <label class="form-label" for="SahipAd">SahipAd</label>--}}
                                    {{--                                        <input name="SahipAd" type="text" class="form-control" id="SahipAd">--}}
                                    {{--                                        <label class="form-label" for="SahipSoyad">SahipSoyad</label>--}}
                                    {{--                                        <input name="SahipSoyad" type="text" class="form-control" id="SahipSoyad">--}}
                                    {{--                                        <label class="form-label" for="SahipTc">SahipTc</label>--}}
                                    {{--                                        <input name="SahipTc" type="text" class="form-control" id="SahipTc">--}}
                                    {{--                                        <label class="form-label" for="SahipTel">SahipTel</label>--}}
                                    {{--                                        <input name="SahipTel" type="tel" class="form-control" id="SahipTel">--}}
                                    {{--                                        <span class="text-danger field-validation-valid" data-valmsg-for="SahipTel" data-valmsg-replace="true"></span><br>--}}

                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}


                                    <div class="" style="margin: 3rem 0"></div>
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
{{--                                         class="rounded-circle img-fluid border border-2 border-white">--}}
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
{{--                               class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>--}}
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

@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])


    <style>
        .req {
            margin: 0 .5rem;
            color: coral
        }
    </style>


    <div class="card shadow-lg mx-4 card-profile-bottom col-md-8">
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
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form role="form" method="POST" action={{ route('tarla.create') }} enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Tarla Ekle</p>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Tarla Information</p>
                            <div class="row">
                                <div class="form-group">


                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="konum_il">İl<span class="req">*</span></label>
                                            <select name="konum_il" id="konum_il" class="form-control" required>
                                                <option value="">Seçin...</option>
                                                {{--                                                <option value="2">Seçin 2</option>--}}
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="konum_ilce">İlçe<span class="req">*</span></label>
                                            <select name="konum_ilce" id="konum_ilce" class="form-control"
                                                    disabled="disabled">
                                                <option value="">Seçin...</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="konum_mahalle">Mahalle<span class="req">*</span></label>
                                            <select name="konum_mahalle" id="konum_mahalle" class="form-control"
                                                    disabled="disabled">
                                                <option value="">Seçin...</option>
                                            </select>
                                        </div>
                                    </div>


                                    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
                                            integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
                                            crossorigin="anonymous"></script>


                                    <script>


                                        let p = document.getElementById('konum_il');

                                        console.log(p);
                                        console.log('p');
                                        fetch("{{ route('konum') }}")
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
                                                    man.setAttribute("value", data[i].konum_il);
                                                    // opt2.setAttribute("id", "wid".concat(loop,i));
                                                    man.setAttribute("kid", data[i].konum_id);
                                                    man.setAttribute("class", data[i].konum_il);
                                                    // opt2.setAttribute("w3yz-id", i);
                                                    man.innerHTML = data[i].konum_il;

                                                    if (ko === ko2) {
                                                        continue;
                                                    }
                                                    var ko2 = ko;
                                                    p.appendChild(man);

                                                    // }
                                                }
                                            });

                                        p.addEventListener('change', function () {
                                            // console.log('dzzzz')
                                            // let lo = 'loop';
                                            // let num = 1;
                                            // let loop = lo.concat(num);

                                            // var w3yzid = document.getElementById(this.value).getAttribute('w3yz-id');
                                            // console.log(document.getElementById('brow').id);
                                            let value = this.value
                                            // console.log('gh');
                                            // getElementsByClassName(names)

                                            // console.log(document.getElementById('konum_il').getAttribute('kid'));
                                            // console.log(document.getElementsByClassName(this.value)[0].getAttribute('kid'));
                                            let id = document.getElementsByClassName(this.value)[0].getAttribute('kid');
                                            // console.log('gh2');
                                            let red = parseInt(id)
                                            let fin = red - 1

                                            // console.log('3')
                                            // console.log(fin);
                                            document.getElementById('konum_ilce').removeAttribute("disabled");


                                            fetch("{{ route('konum') }}")
                                                .then((response) => {
                                                    if (response.ok) {
                                                        return response.json();
                                                    }
                                                })
                                                .then(data => {

                                                    console.log(data[fin])
                                                    // console.log('4')
                                                    // console.log('4dddd')
                                                    // const lopo = '4545'
                                                    // console.log(lopo)

                                                    for (var i = fin; i < data.length; i++) {
                                                        var sec2 = data[i].konum_ilce;


                                                        let sec = document.createElement("option");
                                                        sec.setAttribute("value", data[i].konum_ilce);
                                                        sec.setAttribute("kid", data[i].konum_id);
                                                        sec.setAttribute("class", data[i].konum_ilce);
                                                        // sec.setAttribute("id", data[i].konum_id);
                                                        sec.innerHTML = data[i].konum_ilce;

                                                        if (sec2 === sec3) {
                                                            continue;
                                                        }
                                                        if (data[i].konum_il != data[fin].konum_il) {
                                                            break;
                                                        }
                                                        var sec3 = sec2;
                                                        // let p = document.getElementById('konum_ilce');
                                                        document.getElementById('konum_ilce').appendChild(sec);

                                                    }

                                                });


                                            // fetch('https://example.com?' + new URLSearchParams({
                                            //     foo: 'value',
                                            //     bar: 2,
                                            // }))
                                        });


                                        document.getElementById('konum_ilce').addEventListener('change', function () {


                                            // console.log('dzzzz')
                                            // let lo = 'loop';
                                            // let num = 1;
                                            // let loop = lo.concat(num);

                                            // var w3yzid = document.getElementById(this.value).getAttribute('w3yz-id');
                                            // console.log(document.getElementById('brow').id);


                                            // console.log(lopo)
                                            var w3 = document.getElementsByClassName(this.value)[0].getAttribute('kid');
                                            // let value = this.id;
                                            let red = parseInt(w3)
                                            let fin = red - 1

                                            // console.log('3')
                                            // console.log(value)
                                            // console.log(fin);
                                            document.getElementById('konum_mahalle').removeAttribute("disabled");

                                            console.log('geldi')
                                            fetch("{{ route('konum') }}")
                                                .then((response) => {
                                                    if (response.ok) {
                                                        return response.json();
                                                    }
                                                })
                                                .then(data => {

                                                    console.log(data[fin])
                                                    // console.log('4')

                                                    for (var i = fin; i < data.length; i++) {
                                                        var sec3 = data[i].konum_ilce;


                                                        let sec4 = document.createElement("option");
                                                        sec4.setAttribute("value", data[i].konum_mahalle);
                                                        sec4.innerHTML = data[i].konum_mahalle;

                                                        // if (sec3 === sec5) { continue; }
                                                        if (data[i].konum_ilce != data[fin].konum_ilce) {
                                                            break;
                                                        }
                                                        // var sec5 = sec3;
                                                        // let p = document.getElementById('konum_ilce');
                                                        document.getElementById('konum_mahalle').appendChild(sec4);

                                                    }

                                                });


                                            // fetch('https://example.com?' + new URLSearchParams({
                                            //     foo: 'value',
                                            //     bar: 2,
                                            // }))


                                        });

                                        // TEKRAR--START


                                        // TEKRAR--FINISH


                                        // TEKRAR--START 2


                                        // TEKRAR--FINISH 2


                                        // TEKRAR--START 3


                                        // TEKRAR--FINISH 3


                                        // TEKRAR--START 4

                                        function addInput5(loop, num, w3yzid, w3yzid2, w3yzid3, w3yzid4, w3yzid5) {

                                            let z = document.getElementsByName(loop)[0];
                                            z.addEventListener('change', function () {

                                                let lo = 'loop';
                                                let n = 1;
                                                let loopNUM = n + num;
                                                let loop = lo.concat(loopNUM);

                                                var w3yzid6 = document.getElementById(this.value).getAttribute('w3yz-id');

                                                fetch("getCategoryAPI.php")
                                                    .then((response) => {
                                                        if (response.ok) {
                                                            return response.json();
                                                        }
                                                    })
                                                    .then(data => {

                                                        if (typeof data.categories[w3yzid].subCategories[w3yzid2].subCategories[w3yzid3].subCategories[w3yzid4].subCategories[w3yzid5].subCategories[w3yzid6].subCategories[0] != 'undefined') {

                                                            let para = document.createElement("input");
                                                            para.setAttribute("list", loop);
                                                            para.setAttribute("class", 'form-control');
                                                            para.type = "text";
                                                            para.name = loop;


                                                            let dl = document.createElement('datalist');
                                                            dl.id = loop;

                                                            for (var i = 0; i < data.categories[w3yzid].subCategories[w3yzid2].subCategories[w3yzid3].subCategories[w3yzid4].subCategories[w3yzid5].subCategories[w3yzid6].subCategories.length; i++) {

                                                                let cocktail = data.categories[w3yzid].subCategories[w3yzid2].subCategories[w3yzid3].subCategories[w3yzid4].subCategories[w3yzid5].subCategories[w3yzid6].subCategories[i].name;

                                                                let opt2 = document.createElement("option");
                                                                opt2.setAttribute("value", cocktail);
                                                                opt2.setAttribute("class", loop);
                                                                opt2.setAttribute("id", cocktail);
                                                                opt2.setAttribute("w3yz-id", i);
                                                                opt2.innerHTML = cocktail;

                                                                dl.appendChild(opt2);
                                                            }

                                                            para.appendChild(dl);
                                                            document.getElementById('p'.concat(loop)).appendChild(para);

                                                            // return;
                                                            // addInput3()

                                                        } else {


                                                            let urunID = data.categories[w3yzid].subCategories[w3yzid2].subCategories[w3yzid3].subCategories[w3yzid4].subCategories[w3yzid5].subCategories[w3yzid6].id;
                                                            let anaID = data.categories[w3yzid].id;

                                                            let para = document.createElement("input");
                                                            para.setAttribute("value", urunID);
                                                            para.type = "hidden";
                                                            para.name = "urunID";

                                                            let adaInput = document.createElement("input");
                                                            adaInput.setAttribute("value", anaID);
                                                            adaInput.type = "hidden";
                                                            adaInput.name = "anaID";

                                                            document.getElementById('urun').appendChild(para);
                                                            document.getElementById('ana').appendChild(adaInput);
                                                            attribute(urunID);
                                                            tik();
                                                        }
                                                    });
                                            });
                                        }


                                    </script>


                                    <label class="form-label" for="Ada">Ada</label>
                                    <input name="Ada" type="number" class="form-control" data-val="true"
                                           data-val-number="The field Ada must be a number." id="Ada">
                                    <span class="text-danger field-validation-valid" data-valmsg-for="Ada"
                                          data-valmsg-replace="true"></span><br>

                                    <label class="form-label" for="Parsel">Parsel</label>
                                    <input name="Parsel" type="number" class="form-control" required="" id="Parsel"
                                           value="0">
                                    <span class="text-danger field-validation-valid" data-valmsg-for="Parsel"
                                          data-valmsg-replace="true"></span><br>

                                    <label class="form-label" for="MetreKare">MetreKare</label>
                                    <input name="MetreKare" type="number" class="form-control" required=""
                                           data-val="true" data-val-number="The field MetreKare must be a number."
                                           id="MetreKare" value="0">
                                    <span class="text-danger field-validation-valid" data-valmsg-for="MetreKare"
                                          data-valmsg-replace="true"></span><br>

                                    <label class="form-label" for="ParselSayisi">Kaç Parsele Bölündü</label>
                                    <input name="ParselSayisi" type="number" class="form-control" required=""
                                           data-val="true" data-val-number="The field ParselSayisi must be a number."
                                           data-val-required="'Parsel Sayisi' must not be empty." id="ParselSayisi"
                                           value="0">
                                    <span class="text-danger field-validation-valid" data-valmsg-for="ParselSayisi"
                                          data-valmsg-replace="true"></span><br>

                                    {{--                                <label class="form-label" for="Durum">Durum</label>--}}
                                    {{--                                <select class="form-control" name="Durum" required="" data-val="true" data-val-required="'Durum' must not be empty." id="Durum">--}}
                                    {{--                                    <option value="Aktif" selected="selected">Aktif</option>--}}
                                    {{--                                    <option value="Pasif">Pasif</option>--}}

                                    {{--                                </select>--}}
                                    {{--                                <span class="text-danger field-validation-valid" data-valmsg-for="Durum" data-valmsg-replace="true"></span><br>--}}

                                    <label class="form-label" for="SatisDurumu">SatisDurumu</label>
                                    <select class="form-control" name="SatisDurumu" required=""
                                           id="SatisDurumu">

                                        <option value="0">Satışta Değil</option>
                                        <option value="1" selected="selected">Satışta</option>

                                    </select><br>

                                    {{--                                <label class="form-label">Tarla Fotoğraf</label>--}}
                                    {{--                                <input name="files" type="file" class="form-control" multiple="" ><br>--}}


                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Tarla Sahip Bilgileri</h4>
                                        </div>
                                        <div class="card-body">
                                            <label class="form-label" for="SahipAd">Sahip Adi</label>
                                            <input name="SahipAd" type="text" class="form-control" id="SahipAd">
                                            <label class="form-label" for="SahipSoyad">Sahip Soyadi</label>
                                            <input name="SahipSoyad" type="text" class="form-control" id="SahipSoyad">
                                            <label class="form-label" for="SahipTc">Sahip Tc</label>
                                            <input name="SahipTc" type="text" class="form-control" id="SahipTc">
                                            <label class="form-label" for="SahipTel">Sahip Telefonu</label>
                                            <input name="SahipTel" type="tel" class="form-control" id="SahipTel">
                                            <span class="text-danger field-validation-valid" data-valmsg-for="SahipTel"
                                                  data-valmsg-replace="true"></span><br>

                                        </div>
                                    </div>

                                    <br>
                                    <div class="row" style="justify-content: space-around">
                                        {{--                                    <div class="row" style="justify-content: space-around">--}}
                                        <div class="col-md-5">
                                            <label class="form-label" for="tarlaFiat">Tarla Fiati<span
                                                    class="req">*</span></label>
                                            <input name="tarlaFiat" type="text" class="form-control" id="tarlaFiat"
                                                   required>
                                        </div>
                                        <div class="col-md-5">

                                            <label class="form-label" for="tarlaPesin">Peşin<span
                                                    class="req">*</span></label>
                                            <input name="tarlaPesin" type="text" class="form-control" id="tarlaPesin"
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

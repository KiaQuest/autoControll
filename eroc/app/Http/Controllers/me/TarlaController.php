<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
//use App\Models\Alinmis;
use App\Models\Araba;
use App\Models\Customer;
use App\Models\Odeme;
use App\Models\tarla;
use App\Models\User;
use Illuminate\Http\Request;

class TarlaController extends Controller
{
    public function show()
    {
        return view('pages.user-tarla-ek');
    }

    public function create(Request $request)
    {
//        dd($request->all());
//        $a = array(
//            'OdemeTipi' => 'verecek',
//            'OdemeSekli' => $request->OdemeSekli,
////            'tarlaID' => $id,
//            'kapora' => $request->tarlaPesin,
//            'parselfiyati' => $request->tarlaFiat,
//            'kalan' => $request->kalan,
//            'kim' => auth()->user()->id,
////            'vade' => '1',
//            'created_at' => now()
//        );
//        $a['dd'] = 44;
////        array_push($a,'blue' => '5');
//        dd($a);

        $fiat = $request->tarlaFiat;
        $pesin = $request->tarlaPesin;
        $kalan = $request->kalan;

//        echo $pesin + $fiat;
        if ( $fiat != $pesin + $kalan){

//            $this->validate(request(), [
//                'SahipTc' => 'required|max:20',
//            ], [
//                'SahipTc.required' => 'SahipTc boş ola biləmməz',
//            ]);
//            return view('pages.user-tarla-satis')->withErrors(['kalan' => 'tarla fiyati , ya pesin ya kalan duz degil']);
            //bir ana sayfa  YAPMALIYIIIIIIIIIIKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK
            return redirect()->route('userDashboard')->withErrors('Eror (işlem yapılmadı) : tarla fiyati , ya pesin ya kalan duz değil');
//            dd('tarla fiyati , ya pesin ya kalan duz degil');
        }

//        dd($request->all());
        $data = tarla::create($request->all() + ['kim' => auth()->user()->id , 'yapan' => auth()->user()->username]);
        $data->save();
        $id = $data->id;

//        dd($id);


        $a = array(
            'OdemeTipi' => 'verecek',
            'OdemeSekli' => $request->OdemeSekli,
            'tarlaID' => $id,
            'kapora' => $request->tarlaPesin,
            'parselfiyati' => $request->tarlaFiat,
            'kalan' => $request->kalan,
            'kim' => auth()->user()->id,
            'About' => $request->about,
            'yapan' => auth()->user()->username,
            'parselsayisi' => $request->ParselSayisi,
            'OdeyenAd' => $request->SahipAd,
            'OdeyenSoyad' => $request->SahipSoyad,
            'OdeyenTc' => $request->SahipTc,
            'OdeyenTel' => $request->SahipTel,
            'created_at' => now()
        );

        if ($request->kalan != null && $request->kalan != 0){
//            $request->request->add(['vade' => '1']); //add request
            $a['vade'] = 1;
        }
//        array_push($a,"blue","yellow");

        Odeme::insert($a);
        return redirect()->route('tarla.index');

    }

    public function index()
    {
//        dd(auth()->user()->id);

//        if (auth()->user()->level < 3){
//            $data = tarla::orderBy('created_at' , 'DESC')->paginate(20);
//        }else{
//            $we = User::where('ust' , auth()->user()->id)->get('id')->pluck('id');
//            $data = tarla::where('kim' , auth()->user()->id)->orWhere('kim' , auth()->user()->ust)->orWhereIn('kim' , $we)->orderBy('created_at', 'DESC')->paginate(20);
//        }

        $data = tarla::orderBy('created_at' , 'DESC')->paginate(20);
        return view('pages.user-tarla-index' , compact('data'));
    }

    public function edit(Request $request)
    {
//        dd($request->id);
        $id = $request->id;
        $data = tarla::where('id' , $id)->first();
//        dd($data);
        return view('pages.user-tarla-edit' , compact('data'));
    }
    public function update(Request $request)
    {

//        dd($request->all());
        // il ilcede kaldi ishimiz
        $id = $request->id;
        tarla::where('id' , $id)->update($request->except('_token'));
        return redirect()->route('tarla.index');
    }

    public function satis()
    {
        return view('pages.user-tarla-satis');
    }

    public function tarlas($id , $ust)
    {
//        dd($id);
//         dd(auth()->user()->id);

        $we = User::where('ust' , $id)->get('id')->pluck('id');
        $data = tarla::where('kim' , $id)->orWhere('kim' , $ust)->orWhereIn('kim' , $we)->get();

//        $data = tarla::where('kim' , $id)->where('SatisDurumu' , 1)->get();
        return response()->json($data);
//        dd($data);
    }

    public function tarlasAll()
    {
        $data = tarla::all();
        return response()->json($data);
    }


    public function eksatis(Request $request)
    {

        $SatilanParselSayisi = $request->parselsayisi;
        $parselfiyati = $request->parselfiyati;
        $a = $SatilanParselSayisi * $parselfiyati;
        $kapora = $request->kapora;
        $kalan = $request->kalan;

//        $arabaFiyat = 0;
        $arabaFiyat = $request->fiyat;

        $b = $kalan + $kapora + $arabaFiyat;
//        dd($b);
        if ($a != $b ){
            return view('pages.user-tarla-satis')->withErrors(['kalan' => 'Kalan , Kapora ya Parsel fiyati  YANLIŞTIR']);
//            dd('Kalan , Kapora ya Parsel fiyati  YANLISTIR');
        }

//        dd($request->all());
//        $say = $request->parselsayisi;
//        $check = $request->parselcheck;
//        if ($say > $check){
//            return 'parsel sayisi yanlisdir ';
//        }

        if ($request->kalan != null && $request->kalan != 0){
            $request->request->add(['vade' => '1']); //add request
        }
//        dd($say , $check);
//        $tarlaID = $request
        $action = Odeme::create($request->all() + ['kim' => auth()->user()->id , 'yapan' => auth()->user()->username]);
        $odemeID = $action->id;
//        Customer::create($request->all() + ['kim' => auth()->user()->id]);
//        dd($request->all());
//        dd($odemeID);
//        $kapora = $request->kapora;
//        if ($kapora != 0){
//            echo '0 degil';

//            Alinmis::create([
//                'user' => auth()->user()->username,
//                'onaylian' => 'direkt',
//                'tarla' => $request->tarlaID,
//                'odemeID' => $odemeID,
//                'mikdar' => $kapora
//            ]);

//        }


        $a = array(
            'marka' => $request->marka,
            'model' => $request->model,
            'km' => $request->km,
            'fiyat' => $request->fiyat,
            'about' => $request->about,
            'oid' => $odemeID,
            'yapan' => auth()->user()->username,
            'created_at' => now()
        );
        Araba::insert($a);

//        if ($request->kalan != null && $request->kalan != 0){
////            $request->request->add(['vade' => '1']); //add request
//            $a['vade'] = 1;
//        }

        return redirect()->route('userDashboard')->withErrors('(işlem yapıldı) : tarla satişi eklendi ');
//        return redirect()->route('userDashboard');

    }

    public function satisDurumu(Request $request)
    {
//        $sheygazal = tarla::where()
        if ($request->durum == '1'){
            $change = 0;
        }else{
            $change = 1;
        }
//        dd($request->id);
//        dd($change);
        tarla::where('id' , $request->id)->update(['SatisDurumu' => $change]);
        return redirect()->back();
    }



    public function tarlas2()
    {
//        dd('$id');
//         dd(auth()->user()->id);
        $data = tarla::all('konum_il','konum_ilce','konum_mahalle');
//        $data = tarla::where('kim' , $id)->where('SatisDurumu' , 1)->get();
        return response()->json($data);
//        dd($data);
    }

    public function tarlas3($id)
    {
//        dd('$id');
//         dd(auth()->user()->id);
        $data = tarla::where('id' , $id)->first();
//        $data = tarla::where('kim' , $id)->where('SatisDurumu' , 1)->get();
        return response()->json($data);
//        dd($data);
    }
}

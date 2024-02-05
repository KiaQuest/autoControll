<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use App\Models\firma;
use App\Models\Ihtiac;
//use App\Models\Is;
use App\Models\Odeme;
use Illuminate\Http\Request;

class IhtiacController extends Controller
{

    public function show()
    {

        $firmaz = firma::where('kim' , auth()->user()->id)->get();
//        $firmaz = firma::where('id' , $id)->update($request->except(['_token']));
        return view('pages.user-ihtiac-ek' , compact('firmaz'));
    }

    public function create(Request $request)
    {
//        dd($request->all());


        $OdemeTipi = $request->OdemeTipi;
        $kapora = $request->kapora;
        $toplam = $request->toplam;
        $kalan = $request->kalan;
//
//        $v = $request->alacak;
//        $b = $request->verecek;
//        $c = $request->kalan;
//        $f = $v - $b;
        if ($toplam != abs($kapora + $kalan)){
            return redirect()->back()->withErrors(['kalan' => 'Kalan , alacak ya verecek mebleğe  YANLIŞTIR']);
        }
//        dd($f);
//        if($f < 0){
////            dd('manfi');
//            $a['OdemeTipi'] = 'verecek';
//
////            $a['kapora'] = $request->OdemeTipi;
////            $a['kalan'] = $request->OdemeTipi;
//        }elseif ($f > 0){
////            dd('mosbatdir');
//            $a['OdemeTipi'] = 'alacak';
//        }else{
//            dd('odemeye gecmeye para kalmadi');
//        }


//        dd($f);
        $action = Ihtiac::create($request->all() + ['kim' => auth()->user()->id  , 'yapan' => auth()->user()->username]);
        $ihtiacID = $action->id;

        $a = array(
            'OdemeTipi' => $OdemeTipi,
//            'OdeyenAd' => $t->OdeyenAd,
//            'OdeyenSoyad' => $t->OdeyenSoyad,
//            'OdemeSekli' => $t->OdemeSekli,

//            "OdeyenTc" => $t->OdemeSekli,
//            "OdeyenTel" => $t->OdeyenTel,
//            "VadeTarihi" => $t->VadeTarihi,
//            "Tutar" => $t->Tutar,
//            "Tarla" => $t->Tarla,
//            "Yetkili" => $t->Yetkili,
            "OdemeAciklama" => 'ihtiac',
            "About" => $request->about,
            "kim" => auth()->user()->id,
            "yapan" => auth()->user()->username,
//            "tarlaID" => $t->tarlaID,
//            "parselsayisi" => $t->parselsayisi,
//            "parselfiyati" => $t->parselfiyati,
            "kapora" => $kapora,
            "kalan" => $kalan,
//            "vade" => 3,
//            "onay" => 1,
//            "onaylian" => auth()->user()->username,
            "cid" => $ihtiacID,

            'created_at' => now()
        );

        if ($kalan != 0 && $kalan != null && $kapora != $toplam){
            $a['vade'] = 1;
        }else{
            $a['vade'] = 0;
        }

//        $a['OdemeTipi'] = $request->OdemeTipi;
//        $a['kapora'] = $request->OdemeTipi;
//        $a['kalan'] = $request->OdemeTipi;

//        array_push($a,"blue","yellow");

        Odeme::insert($a);


        return redirect()->route('ihtiac.index');

    }


    public function index()
    {


        if (auth()->user()->level < 3){
            $data = Ihtiac::orderBy('created_at' , 'DESC')->paginate(20);
        }else{
            $data = Ihtiac::where('kim' , auth()->user()->id)->orderBy('created_at', 'DESC')->paginate(20);
        }

        return view('pages.user-ihtiac-index' , compact('data'));
        // fake comment
    }

}

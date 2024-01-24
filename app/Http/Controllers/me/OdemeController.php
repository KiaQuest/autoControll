<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use App\Models\Alinmis;
use App\Models\Odeme;
use App\Models\tarla;
use Illuminate\Http\Request;

class OdemeController extends Controller
{
    public function show()
    {
        return view('pages.user-odeme-ek');
    }

    public function create(Request $request)
    {
//        dd($request->all());
        Odeme::create($request->all() + ['kim' => auth()->user()->id , 'yapan' => auth()->user()->username]);
        return redirect()->route('odeme.index');
    }

    public function index()
    {
//        dd($tarla);
//        $data = Odeme::where('onay' , 1)->where('delete' , '!=' , 2)->get();
        $data = Odeme::where('onay' , 1)->where('delete' , '!=' , 2)->get();
        $select = $data->pluck('OdemeTipi','kapora');
//        $select = $data->map->only('OdemeTipi','kapora');
//        for ($i = 0 ; $i < 5 ; $i++){
//            dump($select);
        $r = $select->all();
//        }
        $k = 0;
        $z = 0;
        foreach ($r as $x => $y){

//                echo "$y : $x <br>";
               if ($y == 'alacak'){
                   $p = $x + $k;
                   $k = $p;
               }
//               echo $k;

            if ($y == 'verecek'){
                $c = $x + $z;
                $z = $c;
            }
//            echo $z;//
//            print_r($t[0]);
        }
//        echo 'toplam alacak = ' . $k . '<br>';
//        echo 'toplam verecek = ' . $z . '<br>';

        $toplam = $k - $z;
//        dd($select->all());
//        $data = Odeme::where('onay' , 1)->where('delete' , '!=' , 2)->get();
        $sililanlar = Odeme::where('onay' , 0)->where('delete' , '=' , 1)->get();
//        $sililanlar = Odeme::where('onay' , 0)->where('delete' , '!=' , 2)->get();

        $vade = Odeme::where('vade' , 3)->get();

        $select2 = $sililanlar->pluck('OdemeTipi','kapora');
        $r2 = $select2->all();
        $k2 = 0;
        $z2 = 0;
        foreach ($r2 as $x2 => $y2){

            if ($y2 == 'alacak'){
                $p2 = $x2 + $k2;
                $k2 = $p2;
            }
            if ($y2 == 'verecek'){
                $c2 = $x2 + $z2;
                $z2 = $c2;
            }
        }
        $toplam2 = $k2 - $z2;
//dd($sililanlar);

        return view('pages.user-odeme-index' , compact('data' , 'sililanlar' , 'toplam' , 'toplam2' , 'vade'));
    }
//    public function index2()
//    {
//        // alinmis
//        $data = Alinmis::all();
//        return view('pages.user-odeme-index-alinmis' , compact('data'));
//        // fake comment
//    }
    public function index3()
    {
        //bekleyen
//        dd('kk');
//        $data = Odeme::where('kim' , auth()->user()->id)->where('onay' , '=' , NULL)->get();
        $data = Odeme::where('onay' , '!=' , 1)->where('delete' , 0)->get();
        $vade = Odeme::where('vade' , 2)->where('delete' , 0)->get();
//        dd($vade);
        return view('pages.user-odeme-index-bekleyen' , compact('data','vade'));
        // fake comment
    }

//    public function onayla(Request $request)
//    {
//
////        dd($request->all());
//        $id = $request->id;
//        $tarlaID = $request->tarlaID;
//
//        Odeme::where('id' , $id)->update([
//            'onay' => 1,
//            'onaylian' => auth()->user()->id]
//        );
//
//        $tarla = tarla::where('id' , $tarlaID)->get('konum_mahalle')->pluck('konum_mahalle');
//        $kim = tarla::where('id' , $tarlaID)->get('kim')->pluck('kim');
//        Alinmis::create([
//           'user' => $kim[0],
//           'onaylian' => auth()->user()->username,
//           'tarla' => $tarla[0],
//           'odemeID' => $id
//        ]);
//
//        return redirect()->back();
//    }

    public function onayDurumu(Request $request)
    {
        Odeme::where('id' , $request->id)->update(['onay' => 0]);
        return redirect()->back();
    }
    public function onayDurumu2(Request $request)
    {
        Odeme::where('id' , $request->id)->update(['onay' => 1]);
        return redirect()->back();
    }
    public function onayDurumu3(Request $request)
    {
       $t = Odeme::where('id' , $request->id)->first();
        Odeme::where('id' , $request->id)->update(['vade' => 2]);
//        dd($t);
        Odeme::insert([
            'OdemeTipi' => 'alacak',
            'OdeyenAd' => $t->OdeyenAd,
            'OdeyenSoyad' => $t->OdeyenSoyad,
            'OdemeSekli' => $t->OdemeSekli,

            "OdeyenTc" => $t->OdemeSekli,
            "OdeyenTel" => $t->OdeyenTel,
            "VadeTarihi" => $t->VadeTarihi,
            "Tutar" => $t->Tutar,
            "Tarla" => $t->Tarla,
            "Yetkili" => $t->Yetkili,
            "OdemeAciklama" => $t->OdemeAciklama,
            "About" => $t->About,
            "kim" => $t->kim,
            "yapan" => $t->yapan,
            "tarlaID" => $t->tarlaID,
            "parselsayisi" => $t->parselsayisi,
            "parselfiyati" => $t->parselfiyati,
            "kapora" => $t->kalan,
            "kalan" => 0,
            "vade" => 0,
            "onay" => 1,
            "onaylian" => auth()->user()->username,
            "cid" => $t->id,

            'created_at' => now()
        ]);
//        Odeme::where('id' , $request->id)->update(['vade' => 2]);
        return redirect()->back();
    }
    public function onayDurumu4(Request $request)
    {
        Odeme::where('id' , $request->id)->update(['vade' => 3]);
        return redirect()->back();
    }

    public function vadeDurumSil(Request $request)
    {
        Odeme::where('id' , $request->id)->update(['vade' => 2]);
        return redirect()->back();
    }

    public function sil(Request $request)
    {
//        dd($request->kapora);
        $request->kapora == 0 ? $action = 2 : $action = 1;
        Odeme::where('id' , $request->id)->update(['delete' => $action]);
        return redirect()->back();
    }

    public function vade()
    {
        $data = Odeme::where('vade', 1)->get();
//        $data = Odeme::where('onay' , '!=' , 1)->where('delete' , '0', 0)->get();
        return view('pages.user-odeme-vade-bekleyen',compact('data'));
    }

    public function odemeDetay(Request $request)
    {
//        return $request->id;

        $data = Odeme::where('id' , $request->id)->first();
//        $data = tarla::where('kim' , $id)->where('SatisDurumu' , 1)->get();
        return response()->json($data);
    }

}

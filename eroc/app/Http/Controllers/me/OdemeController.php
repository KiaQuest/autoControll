<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use App\Models\Alinmis;
use App\Models\Araba;
use App\Models\Ihtiac;
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


//        $SatilanParselSayisi = $request->parselsayisi;
        $parselfiyati = $request->parselfiyati;
//        $a = $parselfiyati;
        $kapora = $request->kapora;
        $kalan = $request->kalan;

//        $arabaFiyat = 0;
//        $arabaFiyat = $request->fiyat;

        $b = $kalan + $kapora ;
//        $b = $kalan + $kapora + $arabaFiyat;
//        dd($b);
        if ($parselfiyati != $b ){
            return view('pages.user-odeme-ek')->withErrors(['kalan' => 'Kalan , Kapora ya Parsel fiyati  YANLIŞTIR']);
//            dd('Kalan , Kapora ya Parsel fiyati  YANLISTIR');
        }

//        dd($request->all());
//        $say = $request->parselsayisi;
//        $check = $request->parselcheck;
//        if ($say > $check){
//            return 'parsel sayisi yanlisdir ';
//        }

        if ($kalan != null && $kalan != 0){
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


//        $a = array(
//            'marka' => $request->marka,
//            'model' => $request->model,
//            'km' => $request->km,
//            'fiyat' => $request->fiyat,
//            'about' => $request->about,
//            'oid' => $odemeID,
//            'yapan' => auth()->user()->username,
//            'created_at' => now()
//        );
//        Araba::insert($a);
//
////        if ($request->kalan != null && $request->kalan != 0){
//////            $request->request->add(['vade' => '1']); //add request
////            $a['vade'] = 1;
////        }

        return redirect()->route('odeme.index');




//        Odeme::create($request->all() + ['kim' => auth()->user()->id , 'yapan' => auth()->user()->username]);
//        return redirect()->route('odeme.index');
    }

    public function index()
    {
//        dd($tarla);
//        $data = Odeme::where('onay' , 1)->where('delete' , '!=' , 2)->get();
        $data = Odeme::where('onay' , 1)->where('delete' , '!=' , 2)->orderBy('created_at', 'desc')->paginate(12);
        $hep = Odeme::select(  'OdemeTipi' ,   'kapora' )->where('onay' , 1)->where('delete' , '!=' , 2)->orderBy('created_at', 'desc')->get()->all();
//        dd($hep[0]->OdemeTipi);
//        $select = $data->pluck('OdemeTipi','kapora');
//        $selectHep = $hep->pluck('OdemeTipi','kapora');
//        $select = $data->map->only('OdemeTipi','kapora');
//        for ($i = 0 ; $i < 5 ; $i++){
//            dump($select);
//        $r = $select->all();
//        $rHep = $selectHep->all();
//        }
        $k = 0;
        $z = 0;

//        echo '&#127829';
//        dd($hep);
//        foreach ($r as $x => $y){
//               if ($y == 'alacak'){
//                   $p = $x + $k;
//                   $k = $p;
//               }
//            if ($y == 'verecek'){
//                $c = $x + $z;
//                $z = $c;
//            }
//        }
//        dd(array_only($hep, ['OdemeTipi', 'kapora']));

        $k2 = 0;
        $z2 = 0;

        foreach ($hep as $x2){
               if ($x2->OdemeTipi == 'alacak'){
                   $p2 = $x2->kapora + $k2;
                   $k2 = $p2;
               }
                if ($x2->OdemeTipi == 'verecek'){
                    $c2 = $x2->kapora + $z2;
                    $z2 = $c2;
                }
        }
        $toplamHep = $k2 - $z2;
//        die();
//        echo 'toplam alacak = ' . $k . '<br>';
//        echo 'toplam verecek = ' . $z . '<br>';

//        $toplam = $k - $z;

//        dd($select->all());
//        $data = Odeme::where('onay' , 1)->where('delete' , '!=' , 2)->get();
//        $sililanlar = Odeme::where('onay' , 0)->where('delete' , '=' , 1)->get();
////        $sililanlar = Odeme::where('onay' , 0)->where('delete' , '!=' , 2)->get();
//
//        $vade = Odeme::where('vade' , 3)->get();
//
//        $select2 = $sililanlar->pluck('OdemeTipi','kapora');
//        $r2 = $select2->all();
//        $k2 = 0;
//        $z2 = 0;
//        foreach ($r2 as $x2 => $y2){
//
//            if ($y2 == 'alacak'){
//                $p2 = $x2 + $k2;
//                $k2 = $p2;
//            }
//            if ($y2 == 'verecek'){
//                $c2 = $x2 + $z2;
//                $z2 = $c2;
//            }
//        }
//        $toplam2 = $k2 - $z2;
//dd($sililanlar);
//dd('ff');
        return view('pages.user-odeme-index' , compact('data' , 'toplamHep' ));
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
        $data = Odeme::where('onay' , '!=' , 1)->where('delete' , '!=' , 2)->get();
//        $vade = Odeme::where('vade' , 2)->where('delete' , 0)->get();
////        dd($vade);
        return view('pages.user-odeme-index-bekleyen' , compact('data'));
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
        // IPTAL index den
        $rr = Odeme::where('id' , $request->id)->first();
//        dd($rr->vade);
        if ($rr->vade == 3){

            if ($rr->OdemeAciklama == 'ihtiac' && $rr->cid != null){
//                dd('$rr->cid');
                $PP = Odeme::where('id' , $rr->cid)->first('cid');
                Ihtiac::where('id' , $PP->cid)->update(['durum' => 1]);
            }
//            VADEden onaylanmis ve indexde gozukur ama iptali basildi
            Odeme::where('id' , $rr->cid)->update(['vade' => 1]);
            Odeme::where('id' , $request->id)->delete();

        }elseif ($rr->OdemeSekli == 'araba'){
//            dd($request->cid); ARABA
            Araba::where('oid' , $rr->cid)->update(['durum' => 0]);
            Odeme::where('id' , $request->id)->delete();
        }

        else{
            if ($rr->OdemeAciklama == 'ihtiac' && $rr->cid != null){
                Ihtiac::where('id' , $rr->cid)->update(['durum' => 0]);
            }
            Odeme::where('id' , $request->id)->update(['onay' => 0]);
        }

        return redirect()->back();
    }
    public function onayDurumu2(Request $request)
    {
//       normal BEKLEYEN onaylamasi
//
        $x = Odeme::where('id' , $request->id)->first();
//        dd($x->OdemeAciklama);
        if ($x->OdemeAciklama == 'ihtiac' && $x->cid != null){
            Ihtiac::where('id' , $x->cid)->update(['durum' => 1]);
        }
//        dd($x->cid);
//        Odeme::where('id' , $request->id)->update(['onay' => 1]);

        $x->update(['onay' => 1]);
        return redirect()->back();
    }
    public function onayDurumu3(Request $request)
    {
//      vade onaylamasi
       $t = Odeme::where('id' , $request->id)->first();
//        dd($t->OdemeTipi);
        if ($t->OdemeAciklama == 'ihtiac' && $t->cid != null){
            Ihtiac::where('id' , $t->cid)->update(['durum' => 2]);
        }
        $t->update(['vade' => 2]);
//        dd($t);


        $a = array(
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
            "vade" => 3,
            "onay" => 1,
            "onaylian" => auth()->user()->username,
            "cid" => $t->id,

            'created_at' => now()
        );

            $a['OdemeTipi'] = $t->OdemeTipi;

//        array_push($a,"blue","yellow");

        Odeme::insert($a);

        return redirect()->back();
    }
//    public function onayDurumu4(Request $request)
//    {
//        Odeme::where('id' , $request->id)->update(['vade' => 3]);
//        return redirect()->back();
//    }

//    public function vadeDurumSil(Request $request)
//    {
//        Odeme::where('id' , $request->id)->update(['vade' => 2]);
//        return redirect()->back();
//    }

    public function sil(Request $request)
    {
//        dd($request->all());
        $request->kapora == 0 ? $action = 2 : $action = 1;
        if ($action == 1){
//            kapora cibde kalsin
            Odeme::where('id' , $request->id)->update(['delete' => $action , 'onay' => 1 , 'About' => Odeme::raw("CONCAT('Kapora Yandi - ', `About`)")]);

        }elseif ($action == 2){
//            kollan sihtirsin
            $r = Odeme::where('id' , $request->id)->first();

            if ($r->OdemeAciklama == 'ihtiac' && $r->cid != null){
//                eger ihtiac olsa
                Ihtiac::where('id' , $r->cid)->update(['durum' => 4]);
            }

            $r->update(['delete' => $action , 'silen' => auth()->user()->username]);

        }
//        Araba::where('oid' , $request->id)->delete();
        Araba::where('oid' , $request->id)->update(['durum' => 1]);
//        Odeme::where('id' , $request->id)->update(['delete' => $action]);
        return redirect()->back();
    }

    public function vade()
    {
//        VADE BEKLEYEN index
        $data = Odeme::where('vade', 1)->where( 'delete' , 0 )->get();
//        $data = Odeme::where('onay' , '!=' , 1)->where('delete' , '0', 0)->get();
        return view('pages.user-odeme-vade-bekleyen',compact('data'));
    }

    public function odemeDetay(Request $request)
    {
//        return $request->id;
//        odeme detay API
        $data = Odeme::where('id' , $request->id)->first();
//        $data = tarla::where('kim' , $id)->where('SatisDurumu' , 1)->get();
        return response()->json($data);
    }

    public function araba(Request $request)
    {
//        dd($request->all());


        if ($request->yfiyat == null){
            $fiyat = $request->fiyat;
        }else{
            $fiyat = $request->yfiyat;
        }
        $t = Odeme::where('id' , $request->id)->first();
//        dd($t->OdemeTipi);
        Araba::where('oid' , $request->id)->update(['durum' => 2]);

        $a = array(
            'OdemeTipi' => 'alacak',
            'OdeyenAd' => $t->OdeyenAd,
            'OdeyenSoyad' => $t->OdeyenSoyad,
            'OdemeSekli' => 'araba',
//            'OdemeSekli' => $t->OdemeSekli,

            "OdeyenTc" => $t->OdemeSekli,
            "OdeyenTel" => $t->OdeyenTel,
            "VadeTarihi" => $t->VadeTarihi,
//            "Tutar" => $t->Tutar,
//            "Tarla" => $t->Tarla,
            "Yetkili" => $t->Yetkili,
            "OdemeAciklama" => $t->OdemeAciklama,
            "About" => $t->About,
            "kim" => $t->kim,
            "yapan" => $t->yapan,
//            "tarlaID" => $t->tarlaID,
//            "parselsayisi" => $t->parselsayisi,
//            "parselfiyati" => $t->parselfiyati,
            "kapora" => $fiyat,
            "kalan" => 0,
            "vade" => 0,
            "onay" => 1,
            "onaylian" => auth()->user()->username,
            "cid" => $t->id,

            'created_at' => now()
        );

//        $a['OdemeTipi'] = $t->OdemeTipi;

//        array_push($a,"blue","yellow");

        Odeme::insert($a);

        return redirect()->back();

    }
}

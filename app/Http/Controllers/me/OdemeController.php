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
        Odeme::create($request->all() + ['kim' => auth()->user()->id]);
        return redirect()->route('odeme.index');
    }

    public function index()
    {
//        dd($tarla);
        $data = Odeme::where('onay' , 1)->where('delete' , '!=' , 2)->get();
//        $data = Odeme::where('onay' , 1)->where('delete' , '!=' , 2)->get();
        $sililanlar = Odeme::where('onay' , 0)->where('delete' , '=' , 1)->get();
//        $sililanlar = Odeme::where('onay' , 0)->where('delete' , '!=' , 2)->get();
        return view('pages.user-odeme-index' , compact('data' , 'sililanlar'));
    }
    public function index2()
    {
        // alinmis
        $data = Alinmis::all();
        return view('pages.user-odeme-index-alinmis' , compact('data'));
        // fake comment
    }
    public function index3()
    {
        //bekleyen
//        $data = Odeme::where('kim' , auth()->user()->id)->where('onay' , '=' , NULL)->get();
        $data = Odeme::where('onay' , '!=' , 1)->where('delete' , '0', 0)->get();
        return view('pages.user-odeme-index-bekleyen' , compact('data'));
        // fake comment
    }

    public function onayla(Request $request)
    {

//        dd($request->all());
        $id = $request->id;
        $tarlaID = $request->tarlaID;

        Odeme::where('id' , $id)->update([
            'onay' => 1,
            'onaylian' => auth()->user()->id]
        );

        $tarla = tarla::where('id' , $tarlaID)->get('konum_mahalle')->pluck('konum_mahalle');
        $kim = tarla::where('id' , $tarlaID)->get('kim')->pluck('kim');
        Alinmis::create([
           'user' => $kim[0],
           'onaylian' => auth()->user()->username,
           'tarla' => $tarla[0],
           'odemeID' => $id
        ]);

        return redirect()->back();
    }

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

    public function sil(Request $request)
    {
//        dd($request->kapora);
        $request->kapora == 0 ? $action = 2 : $action = 1;
        Odeme::where('id' , $request->id)->update(['delete' => $action]);
        return redirect()->back();
    }

}

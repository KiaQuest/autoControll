<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use App\Models\Alinmis;
use App\Models\Customer;
use App\Models\Odeme;
use App\Models\tarla;
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
        tarla::create($request->all() + ['kim' => auth()->user()->id]);
        return redirect()->route('tarla.index');

    }

    public function index()
    {
//        dd(auth()->user()->id);
        $data = tarla::where('kim' , auth()->user()->id)->get();
        return view('pages.user-tarla-index' , compact('data'));
    }

    public function edit(Request $request)
    {

//        dd($request->id);
        $id = $request->id;
        $data = tarla::where('id' , $id)->get();
        return view('pages.user-tarla-edit' , compact('data'));
    }
    public function update(Request $request)
    {

        dd($request->all());
        // il ilcede kaldi ishimiz
        $id = $request->id;
        tarla::where('id' , $id)->update($request->except(['_token']));
        return redirect()->route('firma.index');
    }

    public function satis()
    {
        return view('pages.user-tarla-satis');
    }

    public function tarlas($id)
    {
//        dd($id);
//         dd(auth()->user()->id);
        $data = tarla::where('kim' , $id)->get();
        return response()->json($data);
//        dd($data);
    }


    public function eksatis(Request $request)
    {

//        dd($request->tarlaID);

//        dd($request->all());
        $say = $request->parselsayisi;
        $check = $request->parselcheck;
        if ($say > $check){
            return 'parsel sayisi yanlisdir ';
        }
//        dd($say , $check);
//        $tarlaID = $request
        $action = Odeme::create($request->all() + ['kim' => auth()->user()->id]);
        $odemeID = $action->id;
//        Customer::create($request->all() + ['kim' => auth()->user()->id]);
//        dd($request->all());
//        dd($odemeID);
        $kapora = $request->kapora;
        if ($kapora != 0){
            echo '0 degil';

            Alinmis::create([
                'user' => auth()->user()->username,
                'onaylian' => 'direkt',
                'tarla' => $request->tarlaID,
                'odemeID' => $odemeID,
                'mikdar' => $kapora
            ]);

        }

        return redirect()->route('home');

    }

}

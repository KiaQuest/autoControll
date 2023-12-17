<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use App\Models\Odeme;
use Illuminate\Http\Request;

class OdemeController extends Controller
{
    public function show()
    {
        return view('pages.user-odeme-ek');
    }
//
//    public function show2()
//    {
//        return view('pages.user-odeme-ek2');
//    }

    public function create(Request $request)
    {
//        dd($request->all());
        Odeme::create($request->all() + ['kim' => auth()->user()->id]);
        return redirect()->route('home');

    }

//    public function create2(Request $request)
//    {
//        dd($request->all());
//        tarla::create($request->all() + ['kim' => auth()->user()->id]);
//        return redirect()->route('home');
//
//    }

    public function index()
    {
        $data = Odeme::where('kim' , auth()->user()->id)->get();
        return view('pages.user-odeme-index' , compact('data'));
        // fake comment
    }


}

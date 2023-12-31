<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use App\Models\Sikayet;
use Illuminate\Http\Request;

class SikayetController extends Controller
{

    public function show()
    {
        return view('pages.user-sikayet-ek');
    }

    public function create(Request $request)
    {
//        dd($request->all());
        Sikayet::create($request->all() + ['kim' => auth()->user()->id]);
        return redirect()->route('home');

    }


    public function index()
    {

        $data = Sikayet::where('kim' , auth()->user()->id)->get();
        return view('pages.user-sikayet-index' , compact('data'));
        // fake comment
    }

}

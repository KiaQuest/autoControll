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
        Sikayet::create($request->all() + ['kim' => auth()->user()->id , 'yapan' => auth()->user()->username]);
        return redirect()->route('sikayet.index');
//        return redirect()->route('home');

    }


    public function index()
    {


        if (auth()->user()->level < 3){
            $data = Sikayet::orderBy('created_at' , 'DESC')->paginate(20);
        }else{
            $data = Sikayet::where('kim' , auth()->user()->id)->orderBy('created_at' , 'DESC')->paginate(20);
        }

        return view('pages.user-sikayet-index' , compact('data'));
        // fake comment
    }

}

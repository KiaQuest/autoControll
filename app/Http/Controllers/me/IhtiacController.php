<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use App\Models\Ihtiac;
//use App\Models\Is;
use Illuminate\Http\Request;

class IhtiacController extends Controller
{

    public function show()
    {
        return view('pages.user-ihtiac-ek');
    }

    public function create(Request $request)
    {
//        dd($request->all());
        Ihtiac::create($request->all() + ['kim' => auth()->user()->id]);
        return redirect()->route('home');

    }


    public function index()
    {

        $data = Ihtiac::where('kim' , auth()->user()->id)->get();
        return view('pages.user-ihtiac-index' , compact('data'));
        // fake comment
    }

}

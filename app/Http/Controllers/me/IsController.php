<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use App\Models\Is;
use Illuminate\Http\Request;

class IsController extends Controller
{
    public function show()
    {
        return view('pages.user-is-ek');
    }

    public function create(Request $request)
    {
//        dd($request->all());
        Is::create($request->all() + ['kim' => auth()->user()->id]);
        return redirect()->route('home');

    }


    public function index()
    {

        $data = Is::where('kim' , auth()->user()->id)->orderBy('created_at' , 'DESC')->paginate(20);
        return view('pages.user-is-index' , compact('data'));
        // fake comment
    }


}

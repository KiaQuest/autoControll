<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use App\Models\firma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class firmaController extends Controller
{
    public function show()
    {

//        $data = User::where('level','4')->get();
//        dd($data);
        return view('pages.user-firma-ek');
    }

    public function create(Request $request)
    {
//        dd($request->all());
//        return 'ff';
        firma::create($request->all() + ['kim' => auth()->user()->id]);
        return redirect()->route('firma.index');
    }

    public function index()
    {

        $data = firma::where('kim' , auth()->user()->id)->get();
        return view('pages.user-firma-index' , compact('data'));
    }

    public function konum()
    {
        $users = DB::table('konum')->get();
        return response()->json($users);
    }
    public function edit(Request $request)
    {

//        dd($request->id);
        $id = $request->id;
        $data = firma::where('id' , $id)->get();
        return view('pages.user-firma-edit' , compact('data'));
    }
    public function update(Request $request)
    {

//        dd($request->all());
        $id = $request->id;
        firma::where('id' , $id)->update($request->except(['_token']));
        return redirect()->route('firma.index');
    }

    public function firmam($id)
    {
        $data = firma::find($id);
        return response()->json($data);
    }
}

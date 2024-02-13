<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use App\Models\firma;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

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
        firma::create($request->all() + ['kim' => auth()->user()->id , 'yapan' => auth()->user()->username]);
        return redirect()->route('firma.index');
    }

    public function index()
    {

        if (auth()->user()->level < 3){
            $data = firma::orderBy('created_at', 'DESC')->get();
        }else{
            $we = User::where('ust' , auth()->user()->id)->get('id')->pluck('id');
            $data = firma::where('kim' , auth()->user()->id)->orWhere('kim' , auth()->user()->ust)->orWhereIn('kim' , $we)->orderBy('created_at', 'DESC')->get();
        }
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

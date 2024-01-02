<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use App\Models\Odeme;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function show()
    {
        $data = User::where('level','4')->get();
//        dd($data);
        return view('pages.user-profile-ek',compact('data'));
    }
    public function mudurs()
    {
        $data = User::where('level','4')->get();
//        dd($data);
        return response()->json($data);
        return view('pages.user-profile-ek',compact('data'));
    }

    public function create(Request $request)
    {
        // validate


        $attributes = request()->validate([
            'username' => 'required|max:255|min:2|unique:users',
            'firstname' => 'required|max:255',
            'lastname' => 'required',
            'password' => 'required|min:4|max:255',
            'telefon' => 'unique:users'
        ],[
            'username.unique' => 'Kullanıcı adı zaten seçili',
            'telefon.unique' => 'Telefon zaten seçili',
            'password.min' => 'en azi 4 harf ya adet gerekiyor'
        ]);
//        dd($request->all());
        User::create($request->all());
        return redirect()->route('home');
    }

    public function users()
    {
        $data = User::all();
        return view('pages.users-index' , compact('data'));

    }

    public function bildirmeler()
    {
        $data = Odeme::where('delete' , 2)->get();
        return view('pages.user-bildirmeler' , compact('data'));
    }
}

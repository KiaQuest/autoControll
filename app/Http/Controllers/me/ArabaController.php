<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use App\Models\Araba;

class ArabaController extends Controller
{

    public function index()
    {
//        $computerId = $_SERVER['HTTP_USER_AGENT'];
//        $computerId = $_SERVER['HTTP_USER_AGENT'].$_SERVER['LOCAL_ADDR'].$_SERVER['LOCAL_PORT'].$_SERVER['REMOTE_ADDR'];

//        dd($computerId);
        $data = Araba::all();
        return view('pages.user-arabalar' , compact('data'));
    }
}

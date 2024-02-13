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
//        Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0

//        dd($computerId);
        $data = Araba::all();
        return view('pages.user-arabalar' , compact('data'));
    }
}

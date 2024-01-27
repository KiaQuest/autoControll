<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use App\Models\Araba;

class ArabaController extends Controller
{

    public function index()
    {
        $data = Araba::all();
        return view('pages.user-arabalar' , compact('data'));
    }
}

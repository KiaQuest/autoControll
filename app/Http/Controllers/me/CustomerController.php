<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;

class CustomerController extends Controller
{
    public function create(Request $request)
    {
        dd($request->all());
    }
}

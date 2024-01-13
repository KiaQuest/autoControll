<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create(Request $request)
    {
        Customer::create($request->all() + ['kim' => auth()->user()->id]);
        return redirect()->route('customer.list');
//        dd($request->all());
    }

    public function show()
    {
        return view('pages.user-mustery-ek');
    }

    public function list()
    {
        $data = Customer::where('kim' , auth()->user()->id)->get();
        return view('pages.user-mustery-index', compact('data'));
    }
}

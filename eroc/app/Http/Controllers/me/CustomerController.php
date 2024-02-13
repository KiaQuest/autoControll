<?php

namespace App\Http\Controllers\me;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create(Request $request)
    {
        Customer::create($request->all() + ['kim' => auth()->user()->id , 'yapan' => auth()->user()->username]);
        return redirect()->route('customer.list');
//        dd($request->all());
    }

    public function show()
    {
        return view('pages.user-mustery-ek');
    }

    public function list()
    {

        if (auth()->user()->level < 3){
            $data = Customer::orderBy('created_at' , 'DESC')->paginate(20);
        }else{
            $data = Customer::where('kim' , auth()->user()->id)->orderBy('created_at' , 'DESC')->paginate(20);
        }

        return view('pages.user-mustery-index', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use function Laravel\Prompts\password;

class UserProfileController extends Controller
{
    public function show()
    {

        return view('pages.user-profile');
    }

    public function update(Request $request)
    {
//        dd($request->all());
        $request->validate([
//        $attributes = $request->validate([
//            'username' => ['required','max:255', 'min:2'],
            'firstname' => ['max:10'],
            'lastname' => ['max:10'],
//            'password' => ['min:4'],
//            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
            'address' => ['max:100'],
            'city' => ['max:100'],
            'country' => ['max:100'],
            'postal' => ['max:100'],
            'about' => ['max:255']
        ],
        [
//            'password.min' => 'en azi 4 harf olacak',
            'firstname.max' => 'en çok 10 harf olacak',
            'lastname.max' => 'en çok 10 harf olacak',
        ]);
//        dd('sd');
        $t = [
//            'username' => $request->get('username'),

            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
//            'password' => $request->get('password') ,
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'postal' => $request->get('postal'),
            'about' => $request->get('about')
        ];

        if ($request->password != null){

            $t['password'] = $request->get('password');
        }
        auth()->user()->update($t);
//        auth()->user()->update([
////            'username' => $request->get('username'),
//
//            'firstname' => $request->get('firstname'),
//            'lastname' => $request->get('lastname'),
//            'email' => $request->get('email'),
//            'password' => $request->get('password') ,
//            'address' => $request->get('address'),
//            'city' => $request->get('city'),
//            'country' => $request->get('country'),
//            'postal' => $request->get('postal'),
//            'about' => $request->get('about')
//        ]);
        return back()->with('succes', 'Profile succesfully updated');
    }
}

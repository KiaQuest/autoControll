<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;
use Artisan;

class LoginController extends Controller
{
    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show()
    {
//        Artisan::call('migrate');
//        Artisan::call('cache:clear');

//        Artisan::call('cache:clear');
//        Artisan::call('route:cache');
//        Artisan::call('config:cache');
//        Artisan::call('view:clear');
        return view('auth.login');
    }

    public function login(Request $request)
    {
//        $credentials = $request->validate([
//            'email' => ['required', 'email'],
//            'password' => ['required'],
//        ]);
//        dd($request->all());
        $credentials = $request->validate([
//            'email' => ['required', 'email'],
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password , 'durum' => 0])) {
//        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();


            return redirect()->intended('ana-sayfa-uye-icin');
//            return redirect()->intended('dashboard');
        }elseif (Auth::attempt(['telefon' => $request->username, 'password' => $request->password , 'durum' => 0])) {
//        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();


            return redirect()->intended('ana-sayfa-uye-icin');
//            return redirect()->intended('userDashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

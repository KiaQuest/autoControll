<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/rr', function () {
    return 'kl';
    return view('welcome');
});



use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\me\adminController;
use App\Http\Controllers\me\firmaController;
use App\Http\Controllers\me\TarlaController;
use App\Http\Controllers\me\OdemeController;
use App\Http\Controllers\me\IsController;
use App\Http\Controllers\me\IhtiacController;
use App\Http\Controllers\me\SikayetController;

Route::get('/ilhan', [adminController::class, 'test1']);


    Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');
	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');


Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-ekle', [adminController::class, 'show'])->name('profile.ek');
	Route::post('/profile-ekle', [adminController::class, 'create'])->name('profile.create.ek');

	Route::get('/profile-edit', [adminController::class, 'showEdit'])->name('profile.edit');
	Route::post('/profile-edit', [adminController::class, 'upadeEdit'])->name('profile.post.edit');


	Route::get('/firma-ekle', [firmaController::class, 'show'])->name('firma.show');
	Route::post('/firma-ekle', [firmaController::class, 'create'])->name('firma.create');
	Route::get('/firma-index', [firmaController::class, 'index'])->name('firma.index');
	Route::get('/firma-edit', [firmaController::class, 'edit'])->name('firma.edit');
	Route::post('/firma-edit', [firmaController::class, 'update'])->name('firma.edit.post');

	Route::get('/tarla-ekle', [TarlaController::class, 'show'])->name('tarla.show');
	Route::post('/tarla-ekle', [TarlaController::class, 'create'])->name('tarla.create');
	Route::get('/tarla-index', [TarlaController::class, 'index'])->name('tarla.index');
    Route::get('/tarla-edit', [TarlaController::class, 'edit'])->name('tarla.edit');
    Route::post('/tarla-edit', [TarlaController::class, 'update'])->name('tarla.edit.post');
    Route::get('/tarla-satis', [TarlaController::class, 'satis'])->name('tarla.satis');
    Route::post('/tarla-satis', [TarlaController::class, 'eksatis'])->name('tarla.satis.post');

    Route::get('/tarla-satis-change', [TarlaController::class, 'satisDurumu'])->name('satisDurumu.change');


	Route::get('/odeme-ekle', [OdemeController::class, 'show'])->name('odeme.show');
//	Route::get('/odeme-verecek', [OdemeController::class, 'show2'])->name('odeme.show2');
	Route::post('/odeme-ekle', [OdemeController::class, 'create'])->name('odeme.create');
//	Route::post('/tarla-verecek', [OdemeController::class, 'create2'])->name('odeme.create2');
	Route::get('/odeme-index', [OdemeController::class, 'index'])->name('odeme.index');
	Route::get('/odeme-index-alinmis', [OdemeController::class, 'index2'])->name('odeme.index.alinmis');
	Route::get('/odeme-index-bekleyen', [OdemeController::class, 'index3'])->name('odeme.index.bekleyen');
	Route::get('/odeme-index-vade-bekleyen', [OdemeController::class, 'vade'])->name('odeme.vade.bekleyen');

	Route::get('/odeme-onayla', [OdemeController::class, 'onayDurumu2'])->name('odeme.onayla');
	Route::get('/odeme-vade-onayla', [OdemeController::class, 'onayDurumu3'])->name('odeme.vade.onayla');
	Route::get('/odeme-vade-onayla-muahebe', [OdemeController::class, 'onayDurumu4'])->name('odeme.vade.onayla.muhasebe');
	Route::get('/onay-durumu-change', [OdemeController::class, 'onayDurumu'])->name('onay.durumu.change');
	Route::get('/vade-onay-sil', [OdemeController::class, 'vadeDurumSil'])->name('vade.onay.sil');

    Route::get('/odeme-sil', [OdemeController::class, 'sil'])->name('odeme.sil');


	Route::get('/is-ekle', [IsController::class, 'show'])->name('is.show');
	Route::post('/is-ekle', [IsController::class, 'create'])->name('is.create');
	Route::get('/is-index', [IsController::class, 'index'])->name('is.index');


	Route::get('/ihtiac-ekle', [IhtiacController::class, 'show'])->name('ihtiac.show');
	Route::post('/ihtiac-ekle', [IhtiacController::class, 'create'])->name('ihtiac.create');
	Route::get('/ihtiac-index', [IhtiacController::class, 'index'])->name('ihtiac.index');

	Route::get('/sikayet-ekle', [SikayetController::class, 'show'])->name('sikayet.show');
	Route::post('/sikayet-ekle', [SikayetController::class, 'create'])->name('sikayet.create');
	Route::get('/sikayet-index', [SikayetController::class, 'index'])->name('sikayet.index');

	Route::get('/users', [adminController::class, 'users'])->name('users');
	Route::get('/bildirmeler', [adminController::class, 'bildirmeler'])->name('bildirmeler');

	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});



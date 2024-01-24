<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\me\adminController;
use App\Http\Controllers\me\firmaController;
use App\Http\Controllers\me\TarlaController;
use App\Http\Controllers\me\OdemeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/mudurs', [adminController::class, 'mudurs'])->middleware('guest')->name('register');
Route::get('/mudurs', [adminController::class, 'mudurs']);
Route::get('/konum', [firmaController::class, 'konum'])->name('konum');
Route::get('/tarlalarim/{id}', [TarlaController::class, 'tarlas'])->name('tarlas');
Route::get('/tarlalarim2', [TarlaController::class, 'tarlas2'])->name('tarlas2');
Route::get('/tarlalarim3/{id?}', [TarlaController::class, 'tarlas3'])->name('tarlas3');

Route::get('/odeme/{id?}', [OdemeController::class, 'odemeDetay'])->name('odemeDetay');


Route::get('/firmam/{id?}', [firmaController::class, 'firmam'])->name('firmam');





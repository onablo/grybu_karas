<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrybasController;
use App\Http\Controllers\CalcController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('labas', function () {
    return 'Sveiki, Grybai';
});

Route::get('labas/vakaras', function () {
    return 'Labutis, Grybai';
});

Route::get('labas-rytas', function () {
    return 'Sveikiukas, Grybai';
});

Route::get('ka-tu/{grybas}', [GrybasController::class, 'hello']);

Route::get('spalva/{color}/dydis/{wig}', [GrybasController::class, 'color']);

Route::get('suma/{a}/{b}', [CalcController::class, 'suma']);

Route::get('daugyba', [CalcController::class, 'showDaugyba'])->name('show');
Route::post('daugyba', [CalcController::class, 'doDaugyba'])->name('do-math');
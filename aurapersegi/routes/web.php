<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LuasPersegiController;



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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/luas-persegi', function () {
    return view('luas_persegi_form');
});

Route::post('/luas-persegi', [LuasPersegiController::class, 'hitungLuas']);

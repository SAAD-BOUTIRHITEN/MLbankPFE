<?php

use App\Http\Controllers\RemplirController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/inform', function () {
    return view('inform');
})->name('inform');


/* Remplir le champs */
Route::any('rempli', [RemplirController::class, 'store'])->name('rempli');
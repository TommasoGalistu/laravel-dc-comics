<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
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
// vecchio esercizio
Route::get('/', function () {

    $cards = config('dataCard');
    return view('home', compact('cards'));
})->name('home');


// inizio esercizio nuovo
Route::get('/comics', [ComicController::class, 'index'])->name('comic');



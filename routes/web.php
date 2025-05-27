<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GebeurtenisController;

Route::view('/', 'home')->name('home');
Route::view('/meld', 'meld')->name('meld');
Route::post('/meld', [GebeurtenisController::class, 'store'])->name('meld.store');
Route::view('/mijn-meldingen', 'mijnmeldingen')->name('mijnmeldingen');
Route::view('/over-ons', 'overons')->name('overons');
Route::view('/contact', 'contact')->name('contact');

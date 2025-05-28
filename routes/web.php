<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GebeurtenisController;
use App\Http\Controllers\DonationController;

// routes pagina's
Route::view('/', 'home')->name('home');
Route::view('/meld', 'meld')->name('meld');
Route::post('/meld', [GebeurtenisController::class, 'store'])->name('meld.store');
Route::view('/mijn-meldingen', 'mijnmeldingen')->name('mijnmeldingen');
Route::view('/over-ons', 'overons')->name('overons');
Route::view('/contact', 'contact')->name('contact');

// Donations
Route::get('/doneren', [DonationController::class, 'index'])->name('donate.index');
Route::post('/doneren', [DonationController::class, 'store'])->name('donate.store');
Route::get('/donation/thankyou', [DonationController::class, 'thankyou'])->name('donate.thankyou');

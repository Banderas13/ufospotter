<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GebeurtenisController;
use App\Http\Controllers\DonationController;

// routes pagina's
Route::view('/', 'home')->name('home');
Route::view('/meld', 'meld')->name('meld');
Route::post('/meld', [GebeurtenisController::class, 'store'])->name('meld.store');
Route::get('/mijn-meldingen', [GebeurtenisController::class, 'indexMijnMeldingen'])->name('mijn-meldingen')->middleware('auth');
Route::get('/alle-meldingen', [GebeurtenisController::class, 'indexAlleMeldingen'])->name('alle-meldingen');
Route::view('/over-ons', 'overons')->name('overons');
Route::view('/contact', 'contact')->name('contact');
// Donations
Route::get('/doneren', [DonationController::class, 'index'])->name('donate.index');
Route::post('/doneren', [DonationController::class, 'store'])->name('donate.store');
Route::get('/donation/thankyou', [DonationController::class, 'thankyou'])->name('donate.thankyou');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


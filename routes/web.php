<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/meld', 'meld')->name('meld');
Route::view('/mijn-meldingen', 'mijnmeldingen')->name('mijnmeldingen');
Route::view('/over-ons', 'overons')->name('overons');
Route::view('/contact', 'contact')->name('contact');
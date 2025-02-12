<?php

use App\Http\Controllers\pagescontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [pagescontroller::class,'welcome'])->name('welcome');
Route::get('/about', [pagescontroller::class, 'about'])->name('about');
Route::get('/Services', [pagescontroller::class, 'services'])->name('Services');
Route::get('/Pricing', [pagescontroller::class, 'pricing'])->name('pricing');
Route::get('/Contact Us', [pagescontroller::class, 'Contact'])->name('contact');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PartnerController; // Tambahan untuk Controller Partner
use App\Http\Controllers\Admin\EventController as EventAdminController;

// Rute Bawaan Modul 2
Route::get('/profil', function () { return view('profil'); });
Route::get('/katalog', function () { return view('katalog'); });
Route::get('/bantuan', function () { return view('bantuan'); });
Route::get('/kontak', function () { return view('contact'); });

// Rute User Area (Modul 3)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event/{id}', [EventController::class, 'show'])->name('events.show');
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');
Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');

// Rute Admin Area (Modul 5 & UTS)
Route::prefix('admin')->name('admin.')->group(function () {
    // Rute Resource untuk CRUD Event
    Route::resource('events', EventAdminController::class);
    
    // Rute Resource UTS Soal 1: Kategori (Menggantikan rute manual lama)
    Route::resource('categories', CategoryController::class);

    // Rute Resource UTS Soal 2: Partner
    Route::resource('partners', PartnerController::class);
});
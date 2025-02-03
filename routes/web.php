<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionBookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact-us');
Route::get('/services', [HomeController::class, 'services'])->name('services');
// Route::post('/book-session', [BookingController::class, 'store']);
// Route::post('/book-session', [BookingController::class, 'bookSession'])->name('book.session');

Route::post('/book-session', [SessionBookingController::class, 'bookSession'])->name('book.session');
Route::post('/contact', [ContactController::class, 'send']);





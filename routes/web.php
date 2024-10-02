<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contact');
})->name('contact-us-form');

Route::post('/save-contact', [ContactController::class, 'save'])->name('save-contact');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Home page
Route::get('/', function () {
    return view('home');
});

// Contact form routes
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/admin/submissions', [ContactController::class, 'index'])->name('contact.index');
Route::delete('/admin/submissions/{id}', [ContactController::class, 'destroy']);
Route::get('/admin/submissions/export', [ContactController::class, 'export']);

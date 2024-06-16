<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataRequestController;
use App\Http\Controllers\GoogleOAuthController;

Route::get('/', function () {
    return view('index');
});

Route::post('submit-form',[DataRequestController::class,'formRequestSubmit'])->name('formRequestSubmit')->middleware('guest');
// Route::get('/oauth', [GoogleOAuthController::class, 'redirectToGoogle'])->name('google.oauth');
// Route::get('/callback', [GoogleOAuthController::class, 'handleGoogleCallback']);
// Route::get('/oauth2callback', [GoogleOAuthController::class, 'handleCallback']);
Route::get('/design',function() {
    return view('email.client');
});

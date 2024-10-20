<?php

use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('frontend.test');
});
// Route::get('/frontend/test', function () {
//     return view('frontend.test');
// });

Route::get('/locale/{lang}',[LocaleController::class, 'setLocale']);



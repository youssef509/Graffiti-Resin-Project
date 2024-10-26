<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\Home\SliderControllerAR;

Route::fallback(function () {
    return view('frontend.error.404');
  });
Route::get('/', function () {
    return view('welcome');
});

// Routes For The Back-End (Admin Panel).
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('backend.index');
    Route::prefix('slider')->group(function() {
        Route::get('/', [SliderControllerAR::class, 'index'])->name('admin.slider');
        Route::post('/', [SliderControllerAR::class, 'store'])->name('admin.slider-storeAr');
    });
    Route::prefix('slider')->group(function() {
        Route::get('/', [SliderControllerAR::class, 'index'])->name('admin.slider');

    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/testlang',[TestController::class, 'showData']);

Route::get('/home', function () {
    return view('frontend.home');
});

Route::get('/locale/{lang}',[LocaleController::class, 'setLocale']);


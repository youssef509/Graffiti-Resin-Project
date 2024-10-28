<?php

use App\Http\Controllers\Admin\Home\HomeAboutControllerAR;
use App\Http\Controllers\Admin\Home\HomeAboutControllerEN;
use App\Http\Controllers\Admin\Home\PartinersController;
use App\Http\Controllers\Admin\Home\SliderControllerAR;
use App\Http\Controllers\Admin\Home\SliderControllerEN;
use App\Http\Controllers\Admin\Home\TestimonialControllerAR;
use App\Http\Controllers\Admin\Home\TestimonialControllerEN;
use App\Http\Controllers\Admin\Home\WhyUsControllerAR;
use App\Http\Controllers\Admin\Home\WhyUsControllerEN;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return view('frontend.error.404');
  });


// Routes For The Back-End (Admin Panel)
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('backend.index');
    // Routes For Slider Section
    Route::prefix('slider')->group(function() {
        Route::get('/', [SliderControllerAR::class, 'index'])->name('admin.slider-Ar');
        Route::post('/', [SliderControllerAR::class, 'store'])->name('admin.slider-storeAr');
        Route::put('/{slider}',[SliderControllerAR::class, 'update'])->name('admin.slider-updateAr');
    });
    Route::prefix('slider-en')->group(function() {
        Route::get('/', [SliderControllerEN::class, 'index'])->name('admin.slider-En');
        Route::post('/', [SliderControllerEN::class, 'store'])->name('admin.slider-storeEn');
        Route::put('/{slider}',[SliderControllerEN::class, 'update'])->name('admin.slider-updateEn');
    });
    // Routes For Home About Section
    Route::prefix('homeabout')->group(function() {
        Route::get('/', [HomeAboutControllerAR::class, 'index'])->name('admin.homeabout-Ar');
        Route::post('/', [HomeAboutControllerAR::class, 'store'])->name('admin.homeabout-storeAr');
        Route::put('/{homeAbout}',[HomeAboutControllerAR::class, 'update'])->name('admin.homeabout-updateAr');
    });
    Route::prefix('homeabout-en')->group(function() {
        Route::get('/', [HomeAboutControllerEN::class, 'index'])->name('admin.homeabout-En');
        Route::post('/', [HomeAboutControllerEN::class, 'store'])->name('admin.homeabout-storeEn');
        Route::put('/{homeAbout}',[HomeAboutControllerEN::class, 'update'])->name('admin.homeabout-updateEn');
    });
    // Routes For Partiners Section
    Route::prefix('partiners')->group(function() {
        Route::get('/', [PartinersController::class, 'index'])->name('admin.partiners');
        Route::post('/', [PartinersController::class, 'store'])->name('admin.partiners-store');
        Route::delete('{partiner}',[PartinersController::class, 'destroy'])->name('admin.partiners-destroy');
    });
    // Routes For WhyUs Section
    Route::prefix('whyus')->group(function() {
        Route::get('/', [WhyUsControllerAR::class, 'index'])->name('admin.whyus-Ar');
        Route::post('/', [WhyUsControllerAR::class, 'store'])->name('admin.whyus-store-Ar');
        Route::put('{whyus}',[WhyUsControllerAR::class, 'update'])->name('admin.whyus-update-Ar');
    });
    Route::prefix('whyus-en')->group(function() {
        Route::get('/', [WhyUsControllerEN::class, 'index'])->name('admin.whyus-En');
        Route::post('/', [WhyUsControllerEN::class, 'store'])->name('admin.whyus-store-En');
        Route::put('{whyus}',[WhyUsControllerEN::class, 'update'])->name('admin.whyus-update-En');
    });
    // Routes For Testimonial Section
    Route::prefix('testimonial')->group(function() {
        Route::get('/', [TestimonialControllerAR::class, 'index'])->name('admin.testimonial-Ar');
        Route::post('/', [TestimonialControllerAR::class, 'store'])->name('admin.testimonial-store-Ar');
        Route::put('{testimonial}',[TestimonialControllerAR::class, 'update'])->name('admin.testimonial-update-Ar');
        Route::delete('{singletestimonialID}',[TestimonialControllerAR::class, 'destroy'])->name('admin.testimonial-destroy-Ar');
    });
    Route::prefix('testimonial-en')->group(function() {
        Route::get('/', [TestimonialControllerEN::class, 'index'])->name('admin.testimonial-En');
        Route::post('/', [TestimonialControllerEN::class, 'store'])->name('admin.testimonial-store-En');
        Route::put('{testimonial}',[TestimonialControllerEN::class, 'update'])->name('admin.testimonial-update-En');
        Route::delete('{singletestimonialID}',[TestimonialControllerEN::class, 'destroy'])->name('admin.testimonial-destroy-En');
    });
    // Routes For Products Section
    Route::prefix('products')->group(function() {

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/testlang',[TestController::class, 'showData']);

Route::get('/home', function () {
    return view('frontend.home');
});

Route::get('/locale/{lang}',[LocaleController::class, 'setLocale']);


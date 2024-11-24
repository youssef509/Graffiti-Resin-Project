<?php
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Admin\About\AboutusControllerAR;
use App\Http\Controllers\Admin\About\AboutusControllerEN;
use App\Http\Controllers\Admin\Blog\BlogControllerAR;
use App\Http\Controllers\Admin\Blog\BlogControllerEN;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Home\HomeAboutControllerAR;
use App\Http\Controllers\Admin\Home\HomeAboutControllerEN;
use App\Http\Controllers\Admin\Home\PartinersController;
use App\Http\Controllers\Admin\Home\SliderControllerAR;
use App\Http\Controllers\Admin\Home\SliderControllerEN;
use App\Http\Controllers\Admin\Home\TestimonialControllerAR;
use App\Http\Controllers\Admin\Home\TestimonialControllerEN;
use App\Http\Controllers\Admin\Home\WhyUsControllerAR;
use App\Http\Controllers\Admin\Home\WhyUsControllerEN;
use App\Http\Controllers\Admin\Prodcuts\ProductsControllerAR;
use App\Http\Controllers\Admin\Prodcuts\ProductsControllerEN;
use App\Http\Controllers\Admin\Projects\ProjectImagesController;
use App\Http\Controllers\Admin\Projects\ProjectImagesControllerEN;
use App\Http\Controllers\Admin\Projects\ProjectsControllerAR;
use App\Http\Controllers\Admin\Projects\ProjectsControllerEN;
use App\Http\Controllers\Admin\Quote\AuthorizedDistributorController;
use App\Http\Controllers\Admin\Quote\ImplementationofWorksController;
use App\Http\Controllers\Admin\Quote\TrainingSupervisionController;
use App\Http\Controllers\Admin\Quote\QuoteRequestsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RquestQuote\RquestQuoteController;
use App\Http\Controllers\Admin\Quote\PurchasingMaterialsController;
use App\Http\Controllers\RquestQuote\QuotePurchasingMaterialsController;
use App\Http\Controllers\RquestQuote\QuoteImplementationofWorksController;
use App\Http\Controllers\RquestQuote\QuoteAuthorizedDistributorController;
use App\Http\Controllers\Services\ServicesController;
use App\Http\Controllers\TestController;
use App\Mail\PurchasingMaterials;
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

    // Routes For About Us Section
    Route::prefix('about-us')->group(function() {
        Route::get('/', [AboutUsControllerAR::class, 'index'])->name('admin.about-us-Ar');
        Route::post('/', [AboutUsControllerAR::class, 'store'])->name('admin.about-us-store-Ar');
        Route::put('{about}',[AboutUsControllerAR::class, 'update'])->name('admin.about-us-update-Ar');
    });
    Route::prefix('about-us-en')->group(function() {
        Route::get('/', [AboutUsControllerEN::class, 'index'])->name('admin.about-us-En');
        Route::post('/', [AboutUsControllerEN::class, 'store'])->name('admin.about-us-store-En');
        Route::put('{about}',[AboutUsControllerEN::class, 'update'])->name('admin.about-us-update-En');
    });

    // Routes For Products Section
    Route::prefix('products')->group(function() {
        Route::get('/', [ProductsControllerAR::class, 'index'])->name('admin.products-Ar');
        Route::post('/', [ProductsControllerAR::class, 'store'])->name('admin.products-store-Ar');
        Route::get('{productID}/edit', [ProductsControllerAR::class, 'edit'])->name('admin.products-edit-Ar');
        Route::put('{productID}/update', [ProductsControllerAR::class, 'update'])->name('admin.products-update-Ar');
        Route::delete('{product}', [ProductsControllerAR::class, 'destroy'])->name('admin.products-destroy-Ar');
    });
    Route::prefix('products-en')->group(function() {
        Route::get('/', [ProductsControllerEN::class, 'index'])->name('admin.products-En');
        Route::post('/', [ProductsControllerEN::class, 'store'])->name('admin.products-store-En');
        Route::get('{productID}/edit', [ProductsControllerEN::class, 'edit'])->name('admin.products-edit-En');
        Route::put('{productID}/update', [ProductsControllerEN::class, 'update'])->name('admin.products-update-En');
        Route::delete('{product}', [ProductsControllerEN::class, 'destroy'])->name('admin.products-destroy-En');
    });

    // Routes For Category
    Route::prefix('category')->group(function() {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.category-store');
        Route::get('{categoryID}/edit', [CategoryController::class, 'edit'])->name('admin.category-edit');
        Route::put('{categoryID}/update', [CategoryController::class, 'update'])->name('admin.category-update');
        Route::delete('{categoryID}', [CategoryController::class, 'destroy'])->name('admin.category-destroy');
    });

    // Routes For Projects Section
    Route::prefix('projects')->group(function() {
        Route::get('/', [ProjectsControllerAR::class, 'index'])->name('admin.projects-Ar');
        Route::post('/', [ProjectsControllerAR::class, 'store'])->name('admin.projects-store-Ar');
        Route::get('{projectID}/edit', [ProjectsControllerAR::class, 'edit'])->name('admin.projects-edit-Ar');
        Route::put('{projectID}/update', [ProjectsControllerAR::class, 'update'])->name('admin.projects-update-Ar');
        Route::delete('{projectID}', [ProjectsControllerAR::class, 'destroy'])->name('admin.projects-destroy-Ar');
    });
    Route::prefix('projects-en')->group(function() {
        Route::get('/', [ProjectsControllerEN::class, 'index'])->name('admin.projects-En');
        Route::post('/', [ProjectsControllerEN::class, 'store'])->name('admin.projects-store-En');
        Route::get('{projectID}/edit', [ProjectsControllerEN::class, 'edit'])->name('admin.projects-edit-En');
        Route::put('{projectID}/update', [ProjectsControllerEN::class, 'update'])->name('admin.projects-update-En');
        Route::delete('{projectID}', [ProjectsControllerEN::class, 'destroy'])->name('admin.projects-destroy-En');
    });
    // Routes For Projects Images Section
    Route::prefix('projects/images')->group(function() {
        Route::get('', [ProjectImagesController::class, 'index'])->name('admin.project-images');
        Route::post('/', [ProjectImagesController::class, 'store'])->name('admin.project-images-store');
        Route::delete('{projectimageID}', [ProjectImagesController::class, 'destroy'])->name('admin.project-images-destroy');
    });
    Route::prefix('projects/images-en')->group(function() {
        Route::get('', [ProjectImagesControllerEN::class, 'index'])->name('admin.project-images-en');
        Route::post('/', [ProjectImagesControllerEN::class, 'store'])->name('admin.project-images-en-store');
        Route::delete('{projectimageID}', [ProjectImagesControllerEN::class, 'destroy'])->name('admin.project-images-en-destroy');
    });

    // Routes For Blog Section
    Route::prefix('blogs')->group(function() {
        Route::get('/', [BlogControllerAR::class, 'index'])->name('admin.blogs-Ar');
        Route::post('/', [BlogControllerAR::class, 'store'])->name('admin.blogs-store-Ar');
        Route::get('{blogID}/edit', [BlogControllerAR::class, 'edit'])->name('admin.blogs-edit-Ar');
        Route::put('{blogID}/update', [BlogControllerAR::class, 'update'])->name('admin.blogs-update-Ar');
        Route::delete('{blogID}', [BlogControllerAR::class, 'destroy'])->name('admin.blogs-destroy-Ar');
    });
    Route::prefix('blogs-en')->group(function() {
        Route::get('/', [BlogControllerEN::class, 'index'])->name('admin.blogs-En');
        Route::post('/', [BlogControllerEN::class, 'store'])->name('admin.blogs-store-En');
        Route::get('{blogID}/edit', [BlogControllerEN::class, 'edit'])->name('admin.blogs-edit-En');
        Route::put('{blogID}/update', [BlogControllerEN::class, 'update'])->name('admin.blogs-update-En');
        Route::delete('{blogID}', [BlogControllerEN::class, 'destroy'])->name('admin.blogs-destroy-En');
    });

    // Routes For Training and supervision request
    Route::get('Quote-Requeste/TrainingSupervision', [QuoteRequestsController::class, 'show'])->name('admin.quote-requests-show');
    Route::get('TrainingSupervision/quote-requests-data', [QuoteRequestsController::class, 'getData'])->name('admin.quote-requests-data');
    Route::post('/Quote-Requeste/TrainingSupervision', [TrainingSupervisionController::class, 'AddRecord'])->name('trainingsupervision-add');
    Route::get('/Quote-Requeste/TrainingSupervision/{id}/edit', [TrainingSupervisionController::class, 'edit'])->name('trainingsupervision-edit');
    Route::put('/Quote-Requeste/TrainingSupervision/{id}/update', [TrainingSupervisionController::class, 'update'])->name('trainingsupervision-update');
    Route::delete('/Quote-Requeste/TrainingSupervision/{id}/delete', [TrainingSupervisionController::class, 'destroy'])->name('trainingsupervision-delete');
    

    Route::get('Quote-Requeste/PurchasingMaterials', [QuotePurchasingMaterialsController::class, 'show'])->name('admin.purchasing-materials-show');
    Route::get('PurchasingMaterials/quote-requests-data', [QuotePurchasingMaterialsController::class, 'getData'])->name('admin.purchasing-materials-data');
    Route::post('/Quote-Requeste/PurchasingMaterials', [PurchasingMaterialsController::class, 'AddRecord'])->name('purchasingmaterials-add');
    Route::get('/Quote-Requeste/PurchasingMaterials/{id}/edit', [PurchasingMaterialsController::class, 'edit'])->name('purchasingmaterials-edit');
    Route::put('/Quote-Requeste/PurchasingMaterials/{id}/update', [PurchasingMaterialsController::class, 'update'])->name('purchasingmaterials-update');
    Route::delete('/Quote-Requeste/PurchasingMaterials/{id}/delete', [PurchasingMaterialsController::class, 'destroy'])->name('purchasingmaterials-delete');

    Route::get('Quote-Requeste/ImplementationofWorks', [QuoteImplementationofWorksController::class, 'show'])->name('admin.ImplementationofWorks-show');
    Route::get('ImplementationofWorks/quote-requests-data', [QuoteImplementationofWorksController::class, 'getData'])->name('admin.ImplementationofWorks-data');
    Route::post('/Quote-Requeste/ImplementationofWorks', [ImplementationofWorksController::class, 'AddRecord'])->name('ImplementationofWorks-add');
    Route::get('/Quote-Requeste/ImplementationofWorks/{id}/edit', [ImplementationofWorksController::class, 'edit'])->name('ImplementationofWorks-edit');
    Route::put('/Quote-Requeste/ImplementationofWorks/{id}/update', [ImplementationofWorksController::class, 'update'])->name('ImplementationofWorks-update');
    Route::delete('/Quote-Requeste/ImplementationofWorks/{id}/delete', [ImplementationofWorksController::class, 'destroy'])->name('ImplementationofWorks-delete');

    Route::get('Quote-Requeste/AuthorizedDistributor', [QuoteAuthorizedDistributorController::class, 'show'])->name('admin.AuthorizedDistributor-show');
    Route::get('AuthorizedDistributor/quote-requests-data', [QuoteAuthorizedDistributorController::class, 'getData'])->name('admin.AuthorizedDistributor-data');
    Route::post('/Quote-Requeste/AuthorizedDistributor', [AuthorizedDistributorController::class, 'AddRecord'])->name('AuthorizedDistributor-add');
    Route::get('/Quote-Requeste/AuthorizedDistributor/{id}/edit', [AuthorizedDistributorController::class, 'edit'])->name('AuthorizedDistributor-edit');
    Route::put('/Quote-Requeste/AuthorizedDistributor/{id}/update', [AuthorizedDistributorController::class, 'update'])->name('AuthorizedDistributor-update');
    Route::delete('/Quote-Requeste/AuthorizedDistributor/{id}/delete', [AuthorizedDistributorController::class, 'destroy'])->name('AuthorizedDistributor-delete');




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




Route::get('/TrainingSupervision', [RquestQuoteController::class, 'index'])->name('quote.index');
Route::post('/TrainingSupervision-send', [TrainingSupervisionController::class, 'store'])->name('trainingsupervision-send');

Route::get('/PurchasingMaterials', [RquestQuoteController::class, 'PurchasingMaterials'])->name('quote.PurchasingMaterials');
Route::post('/PurchasingMaterials-send', [PurchasingMaterialsController::class, 'store'])->name('quote.PurchasingMaterials-send');

Route::get('/ImplementationOfWorks', [RquestQuoteController::class, 'ImplementationOfWorks'])->name('quote.implementationOfWorks');
Route::post('/ImplementationOfWorks-send', [ImplementationOfWorksController::class, 'store'])->name('quote.implementationOfWorks-send');

Route::get('/AuthorizedDistributor', [RquestQuoteController::class, 'AuthorizedDistributor'])->name('quote.authorizedDistributor');
Route::post('/AuthorizedDistributor-send', [AuthorizedDistributorController::class, 'store'])->name('quote.authorizedDistributor-send');










Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about-us');
Route::get('/services', [ServicesController::class, 'index'])->name('services');


Route::get('/testlang',[TestController::class, 'showData']);

Route::get('/home', function () {
    return view('frontend.home');
});

Route::get('/locale/{lang}',[LocaleController::class, 'setLocale']);


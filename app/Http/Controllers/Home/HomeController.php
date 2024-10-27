<?php

namespace App\Http\Controllers\Home;
use App\Helpers\LanguageHelper;
use App\Http\Controllers\Controller;
use App\Models\SliderEn;
use App\Models\SliderAr;

class HomeController extends Controller
{
    public function index() {
        // Use LanguageHelper to get data for each section
        $sliderData = LanguageHelper::getModel('Slider')->all();
        $homeaboutData = LanguageHelper::getModel('HomeAbout')->all();

        // Continue this pattern for each section as needed

        // Pass data to the view
        return view('frontend.home', compact('sliderData', 'homeaboutData' ));
    }
}

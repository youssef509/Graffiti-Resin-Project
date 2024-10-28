<?php

namespace App\Http\Controllers\Home;
use App\Helpers\LanguageHelper;
use App\Http\Controllers\Controller;
use App\Models\Partiners;


class HomeController extends Controller
{
    public function index() {
        // Use LanguageHelper to get data for each section
        $sliderData = LanguageHelper::getModel('Slider')->all();
        $homeaboutData = LanguageHelper::getModel('HomeAbout')->all();
        $partinersData = Partiners::all();
        $WhyusData = LanguageHelper::getModel('WhyUs')->all();
        $testimonialData = LanguageHelper::getModel('Testimonial')->all();

        // Continue this pattern for each section as needed

        // Pass data to the view
        return view('frontend.home', compact('sliderData', 'homeaboutData', 'partinersData', 'WhyusData', 'testimonialData' ));
    }
}

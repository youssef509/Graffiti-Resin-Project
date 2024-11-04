<?php

namespace App\Http\Controllers\About;
use App\Helpers\LanguageHelper;
use App\Http\Controllers\Controller;
use App\Models\Partiners;

class AboutController extends Controller
{
    public function index() {
        // Use LanguageHelper to get data for each section
        $homeaboutData = LanguageHelper::getModel('HomeAbout')->all();
        $partinersData = Partiners::all();
        $WhyusData = LanguageHelper::getModel('WhyUs')->all();
        $testimonialData = LanguageHelper::getModel('Testimonial')->all();

        // Continue this pattern for each section as needed

        // Pass data to the view
        return view('frontend.about.index', compact( 'homeaboutData', 'partinersData', 'WhyusData', 'testimonialData' ));
    }
}

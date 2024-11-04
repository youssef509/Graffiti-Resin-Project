<?php

namespace App\Http\Controllers\Services;
use App\Helpers\LanguageHelper;
use App\Http\Controllers\Controller;
use App\Models\Partiners;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
        $partinersData = Partiners::all();
        $WhyusData = LanguageHelper::getModel('WhyUs')->all();
        $testimonialData = LanguageHelper::getModel('Testimonial')->all();

        // Continue this pattern for each section as needed

        // Pass data to the view
        return view('frontend.Services.index', compact('partinersData', 'WhyusData', 'testimonialData' ));
    }
}

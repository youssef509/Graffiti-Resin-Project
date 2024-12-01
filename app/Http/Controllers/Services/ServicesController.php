<?php

namespace App\Http\Controllers\Services;
use App\Helpers\LanguageHelper;
use App\Http\Controllers\Controller;
use App\Models\Partiners;
use App\Models\SocialMedia;
use App\Models\ContactInformations;
use App\Models\ConversionsAPI;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
        $conversions_api = ConversionsAPI::all();
        $partinersData = Partiners::all();
        $WhyusData = LanguageHelper::getModel('WhyUs')->all();
        $testimonialData = LanguageHelper::getModel('Testimonial')->all();
        $blogData = LanguageHelper::getModel('Blog')->latest()->take(3)->get();
        $socialmediaData = SocialMedia::all();
        $contactData = ContactInformations::all();

        // Continue this pattern for each section as needed

        // Pass data to the view
        return view('frontend.Services.index', 
            compact(
                'conversions_api',
                'partinersData',
                'WhyusData', 
                'testimonialData',
                'blogData', 
                'socialmediaData',
                'contactData'
            ));
    }
}

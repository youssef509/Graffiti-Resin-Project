<?php

namespace App\Http\Controllers\About;
use App\Helpers\LanguageHelper;
use App\Http\Controllers\Controller;
use App\Models\Partiners;
use App\Models\SocialMedia;
use App\Models\ContactInformations;
use App\Models\Seo;
use App\Models\ConversionsAPI;

class AboutController extends Controller
{
    public function index() {
        $conversions_api = ConversionsAPI::all();
        $metaSeo = Seo::where('page_name', "about")->first();
        $homeaboutData = LanguageHelper::getModel('HomeAbout')->all();
        $partinersData = Partiners::all();
        $WhyusData = LanguageHelper::getModel('WhyUs')->all();
        $testimonialData = LanguageHelper::getModel('Testimonial')->all();
        $blogData = LanguageHelper::getModel('Blog')->latest()->take(3)->get();
        $socialmediaData = SocialMedia::all();
        $contactData = ContactInformations::all();

        

        // Pass data to the view
        return view('frontend.about.index',
            compact( 
                'conversions_api',
                'metaSeo',
                'homeaboutData', 
                'partinersData', 
                'WhyusData', 
                'testimonialData',
                'blogData', 
                'socialmediaData',
                'contactData'
            ));
    }
}

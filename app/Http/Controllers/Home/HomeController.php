<?php

namespace App\Http\Controllers\Home;
use App\Helpers\LanguageHelper;
use App\Http\Controllers\Controller;
use App\Models\Partiners;
use App\Models\SocialMedia;
use App\Models\ContactInformations;
use App\Models\Seo;
use App\Models\ConversionsAPI;



class HomeController extends Controller
{
    public function index() {
        $conversions_api = ConversionsAPI::all();
        $metaSeo = Seo::where('page_name', "home")->first();
        $sliderData = LanguageHelper::getModel('Slider')->all();
        $homeaboutData = LanguageHelper::getModel('HomeAbout')->all();
        $partinersData = Partiners::all();
        $projectsData = LanguageHelper::getModel('projects')->all();
        $WhyusData = LanguageHelper::getModel('WhyUs')->all();
        $testimonialData = LanguageHelper::getModel('Testimonial')->all();
        $blogData = LanguageHelper::getModel('Blog')->latest()->take(3)->get();
        $socialmediaData = SocialMedia::all();
        $contactData = ContactInformations::all();


        // Pass data to the view
        return view('frontend.home', 
            compact(
                'conversions_api',
                'metaSeo',
                'sliderData', 
                'homeaboutData',
                'partinersData', 
                'WhyusData', 
                'testimonialData', 
                'projectsData', 
                'blogData', 
                'socialmediaData',
                'contactData'
            ));
    }
}

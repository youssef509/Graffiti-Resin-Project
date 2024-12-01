<?php

namespace App\Http\Controllers\RquestQuote;
use App\Helpers\LanguageHelper;
use App\Models\SocialMedia;
use App\Models\ContactInformations;
use App\Http\Controllers\Controller;
use App\Models\ConversionsAPI;

class RquestQuoteController extends Controller
{
    public function index() {
        $conversions_api = ConversionsAPI::all();
        $blogData = LanguageHelper::getModel('Blog')->latest()->take(3)->get();
        $socialmediaData = SocialMedia::all();
        $contactData = ContactInformations::all();
        return view('frontend.RquestQuote.TrainingSupervision.index',
        compact(
            'conversions_api',
            'blogData', 
            'socialmediaData',
            'contactData'
        ));
    }

    public function PurchasingMaterials() {
        $conversions_api = ConversionsAPI::all();
        $blogData = LanguageHelper::getModel('Blog')->latest()->take(3)->get();
        $socialmediaData = SocialMedia::all();
        $contactData = ContactInformations::all();
        return view('frontend.RquestQuote.PurchasingMaterials.index',
        compact(
            'conversions_api',
            'blogData', 
            'socialmediaData',
            'contactData'
        ));
    }


    public function ImplementationofWorks()
    {
        $conversions_api = ConversionsAPI::all();
        $blogData = LanguageHelper::getModel('Blog')->latest()->take(3)->get();
        $socialmediaData = SocialMedia::all();
        $contactData = ContactInformations::all();
        return view('frontend.RquestQuote.ImplementationOfWorks.index',
        compact(
            'conversions_api',
            'blogData', 
            'socialmediaData',
            'contactData'
        ));
    }

    public function AuthorizedDistributor() {
        $conversions_api = ConversionsAPI::all();
        $blogData = LanguageHelper::getModel('Blog')->latest()->take(3)->get();
        $socialmediaData = SocialMedia::all();
        $contactData = ContactInformations::all();
        return view('frontend.RquestQuote.AuthorizedDistributor.index',
        compact(
            'conversions_api',
            'blogData', 
            'socialmediaData',
            'contactData'
        ));
    }
}

<?php

namespace App\Http\Controllers\Products;
use App\Helpers\LanguageHelper;
use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use App\Models\ContactInformations;
use App\Models\ConversionsAPI;
use App\Models\Seo;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $conversions_api = ConversionsAPI::all();
        $metaSeo = Seo::where('page_name', "products")->first();
        $productsData = LanguageHelper::getModel('Products')->all();
        $blogData = LanguageHelper::getModel('Blog')->latest()->take(3)->get();
        $socialmediaData = SocialMedia::all();
        $contactData = ContactInformations::all();

       
        // Pass data to the view
        return view('frontend.Products.index', 
            compact(
                'conversions_api',
                'metaSeo',
                'productsData',
                'blogData', 
                'socialmediaData',
                'contactData'
            ));
    }

    public function show($id) {
        $conversions_api = ConversionsAPI::all();
        $productData = LanguageHelper::getModel('Products')->where('id', $id)->first();
        $blogData = LanguageHelper::getModel('Blog')->latest()->take(3)->get();
        $socialmediaData = SocialMedia::all();
        $contactData = ContactInformations::all();

       

        // Pass data to the view
        return view('frontend.Products.product-details', 
            compact(
                'conversions_api',
                'productData',
                'blogData', 
                'socialmediaData',
                'contactData'
            ));

    }
}

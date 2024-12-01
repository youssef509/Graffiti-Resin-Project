<?php

namespace App\Http\Controllers\Blog;
use App\Helpers\LanguageHelper;
use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use App\Models\ContactInformations;
use App\Models\Seo;
use App\Models\ConversionsAPI;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $conversions_api = ConversionsAPI::all();
        $metaSeo = Seo::where('page_name', "blog")->first();
        $AllBlogData = LanguageHelper::getModel('Blog')->all();
        $blogData = LanguageHelper::getModel('Blog')->latest()->take(3)->get();
        $socialmediaData = SocialMedia::all();
        $contactData = ContactInformations::all();

        // Pass data to the view
        return view('frontend.Blog.index', 
            compact(
                'conversions_api',
                'metaSeo',
                'AllBlogData',
                'blogData', 
                'socialmediaData',
                'contactData'
            ));
    }

    public function show($id) {
        $SingleBlogData = LanguageHelper::getModel('Blog')->where('id', $id)->first();
        $blogData = LanguageHelper::getModel('Blog')->latest()->take(3)->get();
        $socialmediaData = SocialMedia::all();
        $contactData = ContactInformations::all();

       

        // Pass data to the view
        return view('frontend.Blog.blog-details', 
            compact(
                'SingleBlogData',
                'blogData', 
                'socialmediaData',
                'contactData'
            ));

    }
}

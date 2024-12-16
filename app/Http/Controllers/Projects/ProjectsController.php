<?php

namespace App\Http\Controllers\Projects;
use App\Helpers\LanguageHelper;
use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use App\Models\ContactInformations;
use App\Models\Category;
use App\Models\ProjectImages;
use App\Models\Seo;
use App\Models\ConversionsAPI;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {
        $conversions_api = ConversionsAPI::all();
        $metaSeo = Seo::where('page_name', "projects")->first();
        $projectsData = LanguageHelper::getModel('Projects')->all();
        $blogData = LanguageHelper::getModel('Blog')->latest()->take(3)->get();
        $socialmediaData = SocialMedia::all();
        $contactData = ContactInformations::all();

       

        // Pass data to the view
        return view('frontend.Projects.index', 
            compact(
                'conversions_api',
                'metaSeo',
                'projectsData',
                'blogData', 
                'socialmediaData',
                'contactData'
            ));
    }

    public function show($id) {
        $conversions_api = ConversionsAPI::all();
        $projectData = LanguageHelper::getModel('Projects')->where('id', $id)->first();
        $category = Category::where('id', $projectData->project_category)->first();
        $projectsImages = ProjectImages::where('project_name', $projectData->project_name)->get();
        $blogData = LanguageHelper::getModel('Blog')->latest()->take(3)->get();
        $socialmediaData = SocialMedia::all();
        $contactData = ContactInformations::all();

       

        // Pass data to the view
        return view('frontend.Projects.project-details', 
            compact(
                'conversions_api',
                'projectData',
                'category',
                'projectsImages',
                'blogData', 
                'socialmediaData',
                'contactData'
            ));

    }
}

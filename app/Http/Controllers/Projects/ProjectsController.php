<?php

namespace App\Http\Controllers\Projects;
use App\Helpers\LanguageHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {

        $ProjectsData = LanguageHelper::getModel('Projects')->all();

       

        // Pass data to the view
        return view('frontend.Projects.index', compact('ProjectsData'));
    }
}

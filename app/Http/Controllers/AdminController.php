<?php

namespace App\Http\Controllers;
use App\Models\ProjectsAr;
use App\Models\ProductsAr;
use App\Models\BlogAr;
use App\Models\Category;
use App\Models\User;
use App\Models\TrainingSupervision;
Use App\Models\PurchasingMaterials;
use App\Models\ImplementationofWorks;
use App\Models\AuthorizedDistributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public function index()
    {
        $ProjectsCount = ProjectsAr::count();
        $ProductsCount = ProductsAr::count();
        $BlogsCount = BlogAr::count();
        $CategoriesCount = Category::count();
        $UsersCount = User::count();
        $TrainingSupervision = TrainingSupervision::count();
        $PurchasingMaterialsCount = PurchasingMaterials::count();
        $ImplementationofWorksCount = ImplementationofWorks::count();
        $AuthorizedDistributorCount = AuthorizedDistributor::count();
        $ContactRequestsCount = $TrainingSupervision + $PurchasingMaterialsCount + $ImplementationofWorksCount + $AuthorizedDistributorCount;


        $blogData = BlogAr::latest()->take(10)->get();
        $projectsData = ProjectsAr::latest()->take(10)->get();
        $productsData = ProductsAr::latest()->take(10)->get();

        return view('backend.index',
            compact(
                'ProjectsCount',
                'ProductsCount',
                'BlogsCount',
                'CategoriesCount',
                'UsersCount',
                'ContactRequestsCount',
                'blogData',
                'projectsData',
                'productsData',
            ));
    }
}

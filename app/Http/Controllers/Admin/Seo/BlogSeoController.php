<?php

namespace App\Http\Controllers\Admin\Seo;
use App\Http\Controllers\Controller;
use App\Models\Seo;

use Illuminate\Http\Request;

class BlogSeoController extends Controller
{
    public function index() {
        $DataFromDB = Seo::where('page_name', 'blog')->first();
        return view('backend.Seo.blogpage', ['Data' => $DataFromDB]);
    }

    public function store() {
        $page_name = "blog";
        // Validate the inputs including the image
        request()->validate([
            'meta_title' => ['required'],
            'meta_keywords' => ['required'],
            'meta_description' => ['required'],
        ]);
       
        Seo::create([
            'page_name' => $page_name,
            'meta_title' => request()->meta_title,
            'meta_keywords' => request()->meta_keywords,
            'meta_description' => request()->meta_description,
        ]);
        return to_route('seo-blogpage')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function update(Seo $Data) {
        request()->validate([
            'meta_title' => ['required'],
            'meta_keywords' => ['required'],
            'meta_description' => ['required'],
        ]);

        // Update the other fields
        $Data->update([
            'meta_title' => request()->meta_title,
            'meta_keywords' => request()->meta_keywords,
            'meta_description' => request()->meta_description,
        ]);
        return to_route('seo-blogpage')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
}

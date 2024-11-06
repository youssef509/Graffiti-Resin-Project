<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('backend.Category.category', ['categories'=> $categories]);
    }
    public function store() {
        // Validate the inputs including the image and PDF file
        request()->validate([
            'ar_name' => ['required'],
            'eng_name' => ['required'],
        ]);
        Category::create([
            'ar_name' => request()->ar_name,
            'eng_name' => request()->eng_name,
        ]);
        return to_route('admin.category')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function edit($id) {
        $categories = Category::where('id', $id)->first();
        return view('backend.Category.Category-edit', ['category' => $categories]);
    }

    public function update(Request $request, $categoryID) {
        $category = Category::findOrFail($categoryID);
        request()->validate([
            'ar_name' => ['required'],
            'eng_name' => ['required'],
        ]);

        $category->update([
            'ar_name' => $request->ar_name,
            'eng_name' => $request->eng_name,
        ]);

        return redirect()->route('admin.category')->with('success-update', 'تم تحديث العنصر بنجاح');
    }

    public function destroy($categoryID) {
        $category = Category::find($categoryID);
        $category -> delete();
        return to_route('admin.category')->with('success', 'تم حذف العنصر بنجاح');
    }
}

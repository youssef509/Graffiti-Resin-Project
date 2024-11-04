<?php

namespace App\Http\Controllers\Admin\Blog;
use App\Models\BlogEn;
use App\Helpers\FileUploadHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogControllerEN extends Controller
{
    public function index() {
        $BlogsFromDB = BlogEn::all();
        return view('backend.Blog.Blog-En', ['blogs'=> $BlogsFromDB]);
    }

    public function store() {
        request()->validate([
            'title' => ['required'],
            'text1' => ['required'],
            'text2' => ['required'],
            'text3' => ['required'],
            'text4' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        // Process the image upload after validation has passed
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $folder = 'blogs';
            $imageName = FileUploadHelper::uploadFile($image, $folder);
        } else {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }


        BlogEn::create([
            'title' => request()->title,
            'text1' => request()->text1,
            'text2' => request()->text2,
            'text3' => request()->text3,
            'text4' => request()->text4,
            'image' => $imageName,
        ]);
        return to_route('admin.blogs-En')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function edit($id) {
        $BlogsFromDB = BlogEn::where('id', $id)->first();
        return view('backend.Blog.blog-editEn', ['blog'=> $BlogsFromDB]);

    }

    public function update(Request $request, $blogID) {
        $Blog = BlogEn::findOrFail($blogID);
        request()->validate([
            'title' => ['required'],
            'text1' => ['required'],
            'text2' => ['required'],
            'text3' => ['required'],
            'text4' => ['required'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image
            $oldImagePath = public_path('uploads/blogs/' . $Blog->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Deletes the old image file
            }
            // Upload new image
            $image = $request->file('image');
            $imageFolder = 'blogs';
            $imageName = FileUploadHelper::uploadFile($image, $imageFolder);
        } else {
            $imageName = $Blog->image; // Keep the current image if no new one is uploaded
        }

        $Blog->update([
            'title' => $request->title,
            'text1' => $request->text1,
            'text2' => $request->text2,
            'text3' => $request->text3,
            'text4' => $request->text4,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.blogs-En')->with('success-update', 'تم تحديث المنتج بنجاح');
    }

    public function destroy($blogID) {
        $Blog = BlogEn::find($blogID);
        $Blog -> delete();
        return to_route('admin.blogs-En')->with('success', 'تم حذف العنصر بنجاح');
    }
}

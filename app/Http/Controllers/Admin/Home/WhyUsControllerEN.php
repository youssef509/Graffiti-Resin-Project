<?php

namespace App\Http\Controllers\Admin\Home;
use App\Models\WhyUsEn;
use App\Helpers\FileUploadHelper;
use App\Http\Controllers\Controller;

class WhyUsControllerEN extends Controller
{
    public function index() {
        $whyusFromDB = WhyUsEn::first();
        return view('backend.Home.whyusEn', ['whyus' => $whyusFromDB]);
    }
    public function store() {
        // Validate the inputs including the image
        request()->validate([
            'title1' => ['required'],
            'title2' => ['required'],
            'text1' => ['required'],
            'text2' => ['required'],
            'video_url' => ['url:http,https'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        // Process the image upload after validation has passed
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $folder = 'whyus'; // Define your folder for uploads
            $imageName = FileUploadHelper::uploadFile($image, $folder);
        } else {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }

        WhyUsEn::create([
            'title1' => request()->title1,
            'title2' => request()->title2,
            'text1' => request()->text1,
            'text2' => request()->text2,
            'video_url' => request()->video_url,
            'image' => $imageName,
        ]);
        return to_route('admin.whyus-En')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function update(WhyUsEn $whyus) {
        request()->validate([
            'title1' => ['required'],
            'title2' => ['required'],
            'text1' => ['required'],
            'text2' => ['required'],
            'video_url' => ['url:http,https'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        // Check and upload image if present
        $uploadedImages = FileUploadHelper::uploadMultipleFiles([
            'image' => request()->file('image')
        ], 'whyus');

        // Delete old image if new one are uploaded
        if (!empty($uploadedImages['image'])) {
            if (file_exists(public_path('uploads/whyus/' . $whyus->image))) {
                unlink(public_path('/uploads/whyus/' . $whyus->image));
            }
            $whyus->image = $uploadedImages['image'];
        }

        // Update the other fields
        $whyus->update([
            'title1' => request()->title1,
            'title2' => request()->title2,
            'text1' => request()->text1,
            'text2' => request()->text2,
            'video_url' => request()->video_url,
        ]);

        return to_route('admin.whyus-En')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
}

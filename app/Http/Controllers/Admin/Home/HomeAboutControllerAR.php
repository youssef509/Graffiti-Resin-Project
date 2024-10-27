<?php

namespace App\Http\Controllers\Admin\Home;
use App\Helpers\FileUploadHelper;
use App\Http\Controllers\Controller;
use App\Models\HomeAboutAr;


class HomeAboutControllerAR extends Controller
{
    public function index() {
        $HomeAbout = HomeAboutAr::first();
        return view('backend.home.about', ['homeAbout' => $HomeAbout]);
    }

    public function store() {
        // Validate the inputs including the image
        request()->validate([
            'text1' => ['required'],
            'text2' => ['required'],
            'item1' => ['required'],
            'item2' => ['required'],
            'item3' => ['required'],
            'item4' => ['required'],
            'item5' => ['required'],
            'image1' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'image2' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        // Check and upload both images
        $uploadedImages = FileUploadHelper::uploadMultipleFiles([
            'image1' => request()->file('image1'),
            'image2' => request()->file('image2')
        ], 'homeabout');

        // If the images failed to upload, return an error
        if (!$uploadedImages['image1'] || !$uploadedImages['image2']) {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }

        HomeAboutAr::create([
            'text1' => request()->text1,
            'text2' => request()->text2,
            'item1' => request()->item1,
            'item2' => request()->item2,
            'item3' => request()->item3,
            'item4' => request()->item4,
            'item5' => request()->item5,
            'image1' => $uploadedImages['image1'],
            'image2' => $uploadedImages['image2'],
        ]);
        return to_route('admin.homeabout-Ar')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function update(HomeAboutAr $homeAbout) {
        // Validate the inputs including both images
        request()->validate([
            'text1' => ['required'],
            'text2' => ['required'],
            'item1' => ['required'],
            'item2' => ['required'],
            'item3' => ['required'],
            'item4' => ['required'],
            'item5' => ['required'],
            'image1' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'image2' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        // Check and upload both images if present
        $uploadedImages = FileUploadHelper::uploadMultipleFiles([
            'image1' => request()->file('image1'),
            'image2' => request()->file('image2')
        ], 'homeabout');

        // Delete old images if new ones are uploaded
        if (!empty($uploadedImages['image1'])) {
            if (file_exists(public_path('uploads/homeabout/' . $homeAbout->image1))) {
                unlink(public_path('uploads/homeabout/' . $homeAbout->image1));  // Delete old image1
            }
            $homeAbout->image1 = $uploadedImages['image1'];
        }

        if (!empty($uploadedImages['image2'])) {
            if (file_exists(public_path('uploads/homeabout/' . $homeAbout->image2))) {
                unlink(public_path('uploads/homeabout/' . $homeAbout->image2));  // Delete old image2
            }
            $homeAbout->image2 = $uploadedImages['image2'];
        }

        // Update the other fields
        $homeAbout->update([
            'text1' => request()->text1,
            'text2' => request()->text2,
            'item1' => request()->item1,
            'item2' => request()->item2,
            'item3' => request()->item3,
            'item4' => request()->item4,
            'item5' => request()->item5,
        ]);
        return to_route('admin.homeabout-Ar')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
}

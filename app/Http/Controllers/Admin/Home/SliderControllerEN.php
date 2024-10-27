<?php

namespace App\Http\Controllers\Admin\Home;
use App\Helpers\FileUploadHelper;
use App\Http\Controllers\Controller;
use App\Models\SliderEn;

class SliderControllerEN extends Controller
{
    public function index() {
        $sliderFromDB = SliderEn::first();
        return view('backend.Home.sliderEn', ['slider' => $sliderFromDB]);
    }
    public function store() {
        // Validate the inputs including the image
        request()->validate([
            'text1' => ['required'],
            'text2' => ['required'],
            'button_text' => ['required'],
            'button_url' => ['url:http,https'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        // Process the image upload after validation has passed
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $folder = 'slider'; // Define your folder for uploads
            $imageName = FileUploadHelper::uploadFile($image, $folder); // Assuming this helper uploads the file and returns its name
        } else {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }
        // Insert data into the slider table
        SliderEn::create([
            'text1' => request()->text1,
            'text2' => request()->text2,
            'button_text' => request()->button_text,
            'button_url' => request()->button_url,
            'image' => $imageName, // Use the uploaded image name
        ]);
        return to_route('admin.slider-En')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function update(SliderEn $slider) {
        request()->validate([
            'text1' => ['required'],
            'text2' => ['required'],
            'button_text' => ['required'],
            'button_url' => ['url:http,https'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        // Check and upload image if present
        $uploadedImages = FileUploadHelper::uploadMultipleFiles([
            'image' => request()->file('image')
        ], 'slider');

        // Delete old image if new one are uploaded
        if (!empty($uploadedImages['image'])) {
            if (file_exists(public_path('uploads/slider/' . $slider->image))) {
                unlink(public_path('/uploads/slider/' . $slider->image));
            }
            $slider->image = $uploadedImages['image'];
        }

        // Update the other fields
        $slider->update([
            'text1' => request()->text1,
            'text2' => request()->text2,
            'button_text' => request()->button_text,
            'button_url' => request()->button_url,
        ]);

        return to_route('admin.slider-En')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
}

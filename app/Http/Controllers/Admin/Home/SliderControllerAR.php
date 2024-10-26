<?php

namespace App\Http\Controllers\Admin\Home;
use App\Http\Controllers\Controller;
use App\Helpers\FileUploadHelper;
use App\Models\SliderAr;
use Illuminate\Http\Request;

class SliderControllerAR extends Controller
{
    public function index() {
        return view('backend.Home.slider');
    }

    public function store() {
        // Validate the inputs including the image
        request()->validate([
            'Ar_text1' => ['required'],
            'Ar_text2' => ['required'],
            'Ar_button_text' => ['required'],
            'Ar_button_url' => ['url:http,https'],
            'Ar_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        // Process the image upload after validation has passed
        if (request()->hasFile('Ar_image')) {
            $image = request()->file('Ar_image');
            $folder = 'slider'; // Define your folder for uploads
            $imageName = FileUploadHelper::uploadFile($image, $folder); // Assuming this helper uploads the file and returns its name
        } else {
            return back()->withErrors(['Ar_image' => 'Image upload failed.']);
        }

        // Insert data into the slider table
        SliderAr::create([
            'Ar_text1' => request()->Ar_text1,
            'Ar_text2' => request()->Ar_text2,
            'Ar_button_text' => request()->Ar_button_text,
            'Ar_button_url' => request()->Ar_button_url,
            'Ar_image' => $imageName, // Use the uploaded image name
        ]);

        return to_route('admin.slider')->with('success-create', 'تم اضافة العنصر بنجاح');
    }
}

<?php

namespace App\Http\Controllers\Admin\Home;
use App\Helpers\FileUploadHelper;
use App\Models\TestimonialAr;
use App\Http\Controllers\Controller;

class TestimonialControllerAR extends Controller
{
    public function index() {
        $testimonialFromDB = TestimonialAr::all();
        return view('backend.Home.testimonial', ['testimonial' => $testimonialFromDB]);
    }
    public function store() {
        // Validate the inputs including the image
        request()->validate([
            'text' => ['required'],
            'person' => ['required'],
            'position' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        // Process the image upload after validation has passed
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $folder = 'testimonial'; // Define your folder for uploads
            $imageName = FileUploadHelper::uploadFile($image, $folder); // Assuming this helper uploads the file and returns its name
        } else {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }
        TestimonialAr::create([
            'text' => request()->text,
            'person' => request()->person,
            'position' => request()->position,
            'image' => $imageName,
        ]);
        return to_route('admin.testimonial-Ar')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function update(TestimonialAr $testimonial) {
        request()->validate([
            'text' => ['required'],
            'person' => ['required'],
            'position' => ['required'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        // Check and upload image if present
        $uploadedImages = FileUploadHelper::uploadMultipleFiles([
            'image' => request()->file('image')
        ], 'testimonial');

        // Delete old image if new one are uploaded
        if (!empty($uploadedImages['image'])) {
            if (file_exists(public_path('uploads/testimonial/' . $testimonial->image))) {
                unlink(public_path('/uploads/testimonial/' . $testimonial->image));
            }
            $testimonial->image = $uploadedImages['image'];
        }

        // Update the other fields
        $testimonial->update([
            'text' => request()->text1,
            'person' => request()->text2,
            'position' => request()->button_text,
        ]);

        return to_route('admin.testimonial-Ar')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
    public function destroy($singletestimonialID) {
        $testimonial = TestimonialAr::find($singletestimonialID);

        if ($testimonial) {
            // Delete the record from the database
            $testimonial->delete();

            // Remove the image file from the uploads folder
            if (file_exists(public_path('uploads/testimonial/' . $testimonial->image))) {
                unlink(public_path('uploads/testimonial/' . $testimonial->image));
            }

            // Redirect with success message
            return to_route('admin.testimonial-Ar')->with('success', 'تم حذف العنصر بنجاح');
        }

        return back()->with('error', 'العنصر غير موجود');
    }
}

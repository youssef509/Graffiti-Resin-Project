<?php

namespace App\Http\Controllers\Admin\Quote;
use App\Models\ImplementationofWorks;
use App\Helpers\FileUploadHelper;
use App\Http\Controllers\Controller;
use App\Mail\ImplementationofWorks as ImplementationofWorksMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ImplementationofWorksController extends Controller
{
    public function store() {
        try {
            // Validate only required fields
            request()->validate([
                'name' => ['required'],
                'phone' => ['required'],
                'city' => ['required'],
                'client_category' => ['required'],
                'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            ]);

            // Initialize image as null by default
            $imageName = null;

            // Check if an image file exists and upload if present
            if (request()->hasFile('image')) {
                $image = request()->file('image');
                $folder = 'Quote';
                $imageName = FileUploadHelper::uploadFile($image, $folder);
            }

            // Insert data into the database
            $data = ImplementationofWorks::create([
                'name' => request()->name,
                'phone' => request()->phone,
                'city' => request()->city,
                'client_category' => request()->client_category,
                // Optional fields with null as default if not provided
                'project_type' => request()->input('project_type', null),
                'building_type' => request()->input('building_type', null),
                'area_for_materials' => request()->input('area_for_materials', null),
                'thickness' => request()->input('thickness', null),
                'image_need' => request()->input('image_need', null),
                'image' => $imageName,
                'floor_statue' => request()->input('floor_statue', null),
                'gaps' => request()->input('gaps', null),
            ]);

            // Send the email to the admin
            Mail::to('youssef201.dev@gmail.com')->send(new ImplementationofWorksMail($data->toArray()));

            // Redirect with success message
            return redirect()->back()->with('success', __('messages.successmessage'))->withInput();

        } catch (\Exception $e) {
            // Log error and redirect with error message
            Log::error("Error storing ImplementationofWorks: " . $e->getMessage());
            return redirect()->back()
                ->with('error', __('messages.generalerror'))
                ->withInput();
        }
    }
}

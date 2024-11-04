<?php

namespace App\Http\Controllers\Admin\Quote;
use App\Helpers\FileUploadHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\PurchasingMaterials as PurchasingMaterialsMail;
use App\Models\PurchasingMaterials;

class PurchasingMaterialsController extends Controller
{
    public function store() {
        try {
            request()->validate([
                'name' => ['required'],
                'phone' => ['required'],
                'city' => ['required'],
                'client_category' => ['required'],
            ]);

            // Initialize image as null by default
            $imageName = null;

            // Check if an image file exists and upload if present
            if (request()->hasFile('image')) {
                $image = request()->file('image');
                $folder = 'Quote';
                $imageName = FileUploadHelper::uploadFile($image, $folder);
            }

            $data = PurchasingMaterials::create([
                'name' => request()->name,
                'phone' => request()->phone,
                'city' => request()->city,
                'client_category' => request()->input('client_category', null),
                'products_to_by' => request()->input('products_to_by', null),
                'area_for_materials' => request()->input('area_for_materials', null),
                'thickness' => request()->input('thickness', null),
                'image_need' => request()->input('image_need', null),
                'image' => $imageName,
            ]);


        // Send the email to the admin
        Mail::to('youssef201.dev@gmail.com')->send(new PurchasingMaterialsMail($data->toArray()));
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

<?php

namespace App\Http\Controllers\Admin\GeneralSettings;
use App\Http\Controllers\Controller;
use App\Models\ContactInformations;
use Illuminate\Http\Request;

class ContactInformationsController extends Controller
{
    public function index() {
        $DataFromDB = ContactInformations::first();
        return view('backend.Settings.contactinfo', ['Data' => $DataFromDB]);
    }

    public function store() {
        // Validate the inputs including the image
        request()->validate([
            'phone' => ['required'],
            'email' => ['required'],
        ]);
       
        ContactInformations::create([
            'phone' => request()->phone,
            'email' => request()->email,
        ]);
        return to_route('settings-contactinfos')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function update(ContactInformations $Data) {
        request()->validate([
            'phone' => ['required'],
            'email' => ['required'],
        ]);

        // Update the other fields
        $Data->update([
           'phone' => request()->phone,
           'email' => request()->email,
        ]);

        return to_route('settings-contactinfos')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
}

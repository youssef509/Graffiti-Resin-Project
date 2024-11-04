<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\AboutusEn;

class AboutusControllerEN extends Controller
{
    public function index() {
        $AboutusFromDB = AboutusEn::first();
        return view('backend.About.about-En', ['Aboutus' => $AboutusFromDB]);
    }

    public function store() {
        // Validate the inputs including the image
        request()->validate([
            'our_mission' => ['required'],
            'our_vision' => ['required'],
            'our_values' => ['required'],
        ]);

        AboutusEn::create([
            'our_mission' => request()->our_mission,
            'our_vision' => request()->our_vision,
            'our_values' => request()->our_values,

        ]);
        return to_route('admin.about-us-En')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function update(AboutusEn $Aboutus) {
        // Validate the inputs including both images
        request()->validate([
            'our_mission' => ['required'],
            'our_vision' => ['required'],
            'our_values' => ['required'],
        ]);

        $Aboutus->update([
            'our_mission' => request()->our_mission,
            'our_vision' => request()->our_vision,
            'our_values' => request()->our_values,
        ]);
        return to_route('admin.about-us-En')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
}

<?php

namespace App\Http\Controllers\Admin\About;
use App\Models\AboutusAr;
use App\Http\Controllers\Controller;

class AboutusControllerAR extends Controller
{
    public function index() {
        $AboutusFromDB = AboutusAr::first();
        return view('backend.About.about', ['Aboutus' => $AboutusFromDB]);
    }

    public function store() {
        // Validate the inputs including the image
        request()->validate([
            'our_mission' => ['required'],
            'our_vision' => ['required'],
            'our_values' => ['required'],
        ]);

        AboutusAr::create([
            'our_mission' => request()->our_mission,
            'our_vision' => request()->our_vision,
            'our_values' => request()->our_values,

        ]);
        return to_route('admin.about-us-Ar')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function update(AboutusAr $Aboutus) {
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
        return to_route('admin.about-us-Ar')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
}

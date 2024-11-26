<?php

namespace App\Http\Controllers\Admin\GeneralSettings;
use App\Http\Controllers\Controller;
use App\Models\ConversionsAPI;
use Illuminate\Http\Request;

class ConversionsApiController extends Controller
{
    public function index() {
        $DataFromDB = ConversionsAPI::first();
        return view('backend.Settings.conversionsAPI', ['Data' => $DataFromDB]);
    }

    public function store() {
        // Validate the inputs including the image
        request()->validate([
            'facebook' => ['required'],
            'instagram' => ['required'],
            'tiktok' => ['required'],
            'linkedin' => ['required'],
        ]);
       
        ConversionsAPI::create([
            'facebook' => request()->facebook,
            'instagram' => request()->instagram,
            'tiktok' => request()->tiktok,
            'linkedin' => request()->linkedin,
        ]);
        return to_route('settings-ConversionsAPIs')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function update(ConversionsAPI $Data) {
        request()->validate([
            'facebook' => ['required'],
            'instagram' => ['required'],
            'tiktok' => ['required'],
            'linkedin' => ['required'],
        ]);

        // Update the other fields
        $Data->update([
            'facebook' => request()->facebook,
            'instagram' => request()->instagram,
            'tiktok' => request()->tiktok,
            'linkedin' => request()->linkedin,
        ]);
        return to_route('settings-ConversionsAPIs')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
}

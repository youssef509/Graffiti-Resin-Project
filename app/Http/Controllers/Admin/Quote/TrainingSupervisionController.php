<?php

namespace App\Http\Controllers\Admin\Quote;
use App\Models\TrainingSupervision;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\TrainingSupervision as TrainingSupervisionMail;
class TrainingSupervisionController extends Controller
{
    public function store() {
        try {
            request()->validate([
                'name' => ['required'],
                'age' => ['required'],
                'phone' => ['required'],
                'city' => ['required'],
                'specialization' => ['required'],
                'current_job' => ['required'],
                'reason' => ['required'],
            ]);

            $data = TrainingSupervision::create([
                'name' => request()->name,
                'age' => request()->age,
                'phone' => request()->phone,
                'city' => request()->city,
                'specialization' => request()->specialization,
                'current_job' => request()->current_job,
                'reason' => request()->reason,
            ]);
            // Send the email to the admin
            Mail::to('youssef201.dev@gmail.com')->send(new TrainingSupervisionMail($data->toArray()));
            return redirect()->back()->with('success', __('messages.successmessage'))->withInput();
        } catch (\Exception $e) {
            // Log error and redirect with error message
            Log::error("Error storing ImplementationofWorks: " . $e->getMessage());
            return redirect()->back()
                ->with('error', __('messages.generalerror'))
                ->withInput();
        }
    }

    public function AddRecord() {
        request()->validate([
            'name' => ['required'],
            'age' => ['required'],
            'phone' => ['required'],
            'city' => ['required'],
            'specialization' => ['required'],
            'current_job' => ['required'],
            'reason' => ['required'],
        ]);

        TrainingSupervision::create([
            'name' => request()->name,
            'age' => request()->age,
            'phone' => request()->phone,
            'city' => request()->city,
            'specialization' => request()->specialization,
            'current_job' => request()->current_job,
            'reason' => request()->reason,
        ]);

        return to_route('admin.quote-requests-show')->with('success-create', 'تم اضافة العنصر بنجاح');

    }
}

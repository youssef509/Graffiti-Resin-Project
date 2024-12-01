<?php

namespace App\Http\Controllers\Contact;
use App\Helpers\LanguageHelper;
use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use App\Models\ContactInformations;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\Contact as ContactMail;
use Illuminate\Http\Request;
use App\Models\ConversionsAPI;

class ContactUsController extends Controller
{
    public function index() {
        $conversions_api = ConversionsAPI::all();
        $blogData = LanguageHelper::getModel('Blog')->latest()->take(3)->get();
        $socialmediaData = SocialMedia::all();
        $contactData = ContactInformations::all();

        // Pass data to the view
        return view('frontend.Contact.index', 
            compact(
                'conversions_api',
                'blogData', 
                'socialmediaData',
                'contactData'
            ));
    }

    public function store() {
        try {
            request()->validate([
                'name' => ['required'],
                'email' => ['required'],
                'phone' => ['required'],
                'subject' => ['required'],
                'message' => ['required'],
            ]);

            $data = ContactUs::create([
                'name' => request()->name,
                'email' => request()->email,
                'phone' => request()->phone,
                'subject' => request()->subject,
                'message' => request()->message,
            ]);
            // Send the email to the admin
            Mail::to('youssef201.dev@gmail.com')->send(new ContactMail($data->toArray()));
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

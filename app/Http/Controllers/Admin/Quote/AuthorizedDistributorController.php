<?php

namespace App\Http\Controllers\Admin\Quote;
use App\Models\AuthorizedDistributor;
use App\Mail\AuthorizedDistributor as AuthorizedDistributorMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AuthorizedDistributorController extends Controller
{
    public function store() {
        try {

            request()->validate([
                'name' => ['required'],
                'phone' => ['required'],
                'city' => ['required'],
                'street' => ['required'],
            ]);


            $data = AuthorizedDistributor::create([
                'name' => request()->name,
                'phone' => request()->phone,
                'city' => request()->city,
                'street' => request()->street,
                'shop_name' => request()->input('shop_name' , null),
                'shop_type' => request()->input('shop_type', null),
                'shop_size' => request()->input('shop_size', null),
                'shop_products' => request()->input('shop_products', null),
            ]);


            // Send the email to the admin
            Mail::to('Tayeob@hotmail.com')->send(new AuthorizedDistributorMail($data->toArray()));
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
            'phone' => ['required'],
            'city' => ['required'],
            'street' => ['required'],
        ]);

        AuthorizedDistributor::create([
            'name' => request()->name,
            'phone' => request()->phone,
            'city' => request()->city,
            'street' => request()->street,
            'shop_name' => request()->input('shop_name' , null),
            'shop_type' => request()->input('shop_type', null),
            'shop_size' => request()->input('shop_size', null),
            'shop_products' => request()->input('shop_products', null),
        ]);

        return to_route('admin.AuthorizedDistributor-show')->with('success-create', 'تم اضافة العنصر بنجاح');

    }

    public function edit($id) {
        $DataFromDB = AuthorizedDistributor::where('id', $id)->first();
        return view('backend.Quote.AuthorizedDistributor.edit', ['DataFromDB' => $DataFromDB]);

    }

    public function update($id) {
        $DataFromDB = AuthorizedDistributor::where('id', $id)->first();
        request()->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'city' => ['required'],
            'street' => ['required'],
        ]);

        $DataFromDB->update([
           'name' => request()->name,
            'phone' => request()->phone,
            'city' => request()->city,
            'street' => request()->street,
            'shop_name' => request()->input('shop_name' , null),
            'shop_type' => request()->input('shop_type', null),
            'shop_size' => request()->input('shop_size', null),
            'shop_products' => request()->input('shop_products', null),
        ]);

        return redirect()->route('admin.AuthorizedDistributor-show')->with('success-update', 'تم تحديث العنصر بنجاح');
    }

    public function destroy($id) {
        $DataFromDB = AuthorizedDistributor::find($id);
        $DataFromDB -> delete();
        return to_route('admin.AuthorizedDistributor-show')->with('success', 'تم حذف العنصر بنجاح');
    }
}

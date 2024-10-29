<?php

namespace App\Http\Controllers\Admin\Prodcuts;
use App\Helpers\FileUploadHelper;
use App\Http\Controllers\Controller;
use App\Models\ProductsAr;
use Illuminate\Http\Request;
class ProductsControllerAR extends Controller
{
    public function index() {
        $productsFromDB = ProductsAr::all();
        return view('backend.products.products', ['products'=> $productsFromDB]);
    }

    public function store() {
        // Validate the inputs including the image and PDF file
        request()->validate([
            'product_name' => ['required'],
            'product_description' => ['required'],
            'product_pdf' => ['required', 'mimes:pdf', 'max:10240'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        // Process the image upload after validation has passed
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $folder = 'products';
            $imageName = FileUploadHelper::uploadFile($image, $folder);
        } else {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }

        if (request()->hasFile('product_pdf')) {
            $pdf = request()->file('product_pdf');
            $pdfFolder = 'products';
            $pdfName = FileUploadHelper::uploadFile($pdf, $pdfFolder);
        } else {
            return back()->withErrors(['product_pdf' => 'PDF upload failed.']);
        }

        ProductsAr::create([
            'product_name' => request()->product_name,
            'product_description' => request()->product_description,
            'product_pdf' => $pdfName,
            'image' => $imageName,
        ]);
        return to_route('admin.products-Ar')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function edit($id) {
        $productsFromDB = ProductsAr::where('id', $id)->first();
        return view('backend.products.product-edit', ['product' => $productsFromDB]);
    }

    public function update(Request $request, $productID) {
        $product = ProductsAr::findOrFail($productID);
        request()->validate([
            'product_name' => ['required'],
            'product_description' => ['required'],
            'product_pdf' => ['mimes:pdf', 'max:10240'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image
            $oldImagePath = public_path('uploads/products/' . $product->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Deletes the old image file
            }
            // Upload new image
            $image = $request->file('image');
            $imageFolder = 'products';
            $imageName = FileUploadHelper::uploadFile($image, $imageFolder);
        } else {
            $imageName = $product->image; // Keep the current image if no new one is uploaded
        }

        // Handle PDF upload if a new PDF is provided
        if ($request->hasFile('product_pdf')) {
            // Delete the old PDF
            $oldPdfPath = public_path('uploads/products/' . $product->product_pdf);
            if (file_exists($oldPdfPath)) {
                unlink($oldPdfPath); // Deletes the old PDF file
            }
            // Upload new PDF
            $pdf = $request->file('product_pdf');
            $pdfFolder = 'products';
            $pdfName = FileUploadHelper::uploadFile($pdf, $pdfFolder);
        } else {
            $pdfName = $product->product_pdf; // Keep the current PDF if no new one is uploaded
        }

        // Update the product in the database
        $product->update([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_pdf' => $pdfName,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.products-Ar')->with('success-update', 'تم تحديث المنتج بنجاح');
    }

    public function destroy($productID) {
        $product = ProductsAr::find($productID);
        $product -> delete();
        return to_route('admin.products-Ar')->with('success', 'تم حذف العنصر بنجاح');
    }
}

<?php

namespace App\Http\Controllers\RquestQuote;
use App\Http\Controllers\Controller;
use App\Models\PurchasingMaterials;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class QuotePurchasingMaterialsController extends Controller
{
    public function show()
    {
        return view('backend.Quote.ImplementationofWorks.index');
    }

    public function getData(Request $request)
    {
        $data = PurchasingMaterials::select([
            'id',
            'name',
            'phone',
            'city',
            'client_category',
            'products_to_by',
            'area_for_materials',
            'thickness',
            'image_need',
            'image'
        ]);

        return DataTables::of($data)
            ->addColumn('image', function($row) {
                // Wrap the image in an anchor tag to open in a new tab
                if ($row->image) {
                    $imageUrl = $row->getImageUrlAttribute();
                    return '<a href="' . $imageUrl . '" target="_blank"><img src="' . $imageUrl . '" width="50" /></a>';
                }
                return 'N/A';
            })
            ->rawColumns(['image']) // Allow HTML in the 'image' column
            ->make(true);
    }

}

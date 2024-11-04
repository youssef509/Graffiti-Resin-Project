<?php

namespace App\Http\Controllers\Admin\Quote;
use App\Models\TrainingSupervision;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class QuoteRequestsController extends Controller
{
    public function show()
    {
        return view('backend.Quote.TrainingSupervision.index');
    }

    public function getData()
    {
        $data = TrainingSupervision::all();
        return DataTables::of($data)->make(true);
    }
}

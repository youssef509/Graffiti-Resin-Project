<?php

namespace App\Http\Controllers\RquestQuote;
use App\Http\Controllers\Controller;
use App\Models\AuthorizedDistributor;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class QuoteAuthorizedDistributorController extends Controller
{
    public function show()
    {
        return view('backend.Quote.AuthorizedDistributor.index');
    }

    public function getData()
    {
        $data = AuthorizedDistributor::all();
        return DataTables::of($data)->make(true);
    }
}

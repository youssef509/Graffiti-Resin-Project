<?php

namespace App\Http\Controllers\RquestQuote;

use App\Http\Controllers\Controller;

class RquestQuoteController extends Controller
{
    public function index() {
        return view('frontend.RquestQuote.TrainingSupervision.index');
    }

    public function PurchasingMaterials() {
        return view('frontend.RquestQuote.PurchasingMaterials.index');
    }


    public function ImplementationofWorks()
    {
        return view('frontend.RquestQuote.ImplementationOfWorks.index');
    }

    public function AuthorizedDistributor() {
        return view('frontend.RquestQuote.AuthorizedDistributor.index');
    }
}

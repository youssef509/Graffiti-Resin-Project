<?php

namespace App\Http\Controllers;
use App\Models\Test;
use App\Models\TestEn;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showData()
    {
        // Get the current locale from the session, default to 'en' if not set
        $lang = session('locale', 'en');

        // Fetch data based on the locale
        $data = ($lang == 'ar') ? Test::all() : TestEn::all();

        // Pass the data to the view
        return view('testlang', ['data' => $data, 'lang' => $lang]);
    }
}


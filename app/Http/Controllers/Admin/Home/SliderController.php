<?php

namespace App\Http\Controllers\Admin\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index() {
        return view('backend.Home.slider');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.layouts.home');
    }

    public function cp()
    {
        return view('frontend.layouts.co-packing');
    }

    public function contact()
    {
        return view('frontend.layouts.contact');
    }
}

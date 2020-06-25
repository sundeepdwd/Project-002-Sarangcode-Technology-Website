<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewLoader extends Controller
{
    public function loadHomePageView()
    {
        return view('pages\home');
    }

    public function loadAboutUsView()
    {
        return view('pages\aboutus');
    }

    public function loadContactUsView()
    {
        return view('pages\contactus');
    }
}

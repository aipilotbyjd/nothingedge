<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsPageController extends Controller
{
    public function index()
    {
        return view('pages.about-us.index');
    }
}

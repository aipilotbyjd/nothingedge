<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesPageController extends Controller
{
    public function index()
    {
        return view("pages.services.index");
    }

    public function WebDevelopmentServicesDetails()
    {
        return view("pages.services.web-service-detail");
    }

    public function AppDevelopmentServicesDetails()
    {
        return view("pages.services.app-service-detail");
    }

    public function UiUxDevelopmentServicesDetails()
    {
        return view("pages.services.design-service-detail");
    }
}

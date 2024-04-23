<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    public function index()
    {
        return view('pages.blog.index');
    }

    public function BlogDetails()
    {
        return view('pages.blog.blog-detail');
    }

    public function WhatAreDesignPatterns()
    {
        return view('pages.blog.what-are-design-patterns');
    }

    public function WebDevelopmentLifeCycle()
    {
        return view('pages.blog.web-development-life-cycle');
    }

    public function WebApplicationArchitecture()
    {
        return view('pages.blog.web-application-architecture');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamPageController extends Controller
{
    public function index()
    {
        return view('pages.team.index');
    }
}

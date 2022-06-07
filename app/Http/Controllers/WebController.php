<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $page_title = 'CalGary - Auto Care';
        return view('index', compact('page_title'));
    }

    public function about()
    {
        return 'good';
        $page_title = 'CalGary - About-Us';
        return view('web.about', compact('page_title'));
    }
    public function services()
    {
        return 'good';
        $page_title = 'CalGary - Services';
        return view('web.service', compact('page_title'));
    }
}

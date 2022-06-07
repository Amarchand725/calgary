<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check() && Auth::user()->hasRole('Admin')){
            $page_title = 'Calgary - Admin-Dashboard';
            return View('admin.dashboard.dashboard', compact('page_title'));
        }else{
            return redirect()->route('admin.login');
        }
    }
}

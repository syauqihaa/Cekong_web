<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $province = $this->getProvince();
        return view('home', compact('province'));
    }

    public function getProvince()
    {
        return Province::pluck('title', 'code');
    }
}

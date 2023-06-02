<?php

namespace App\Http\Controllers;

use App\Models\Kosts;
use Illuminate\Http\Request;

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
        // get all data_kost from database
        $data_kosts = kosts::all();
        return view('home', compact('data_kosts'));
    }
}

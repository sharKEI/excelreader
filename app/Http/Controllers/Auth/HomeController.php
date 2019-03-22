<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Excels;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['title'] = 'Home';
        $data['subheader'] = ['title' => 'Dashboard', 'desc' => 'Data Health Check.'];
        $data['excels'] = Excels::all();
        return view('home', $data);
    }

    public function login(){
      $data['title'] = 'Home';
      $data['subheader'] = ['title' => 'Dashboard', 'desc' => 'Data Health Check.'];
      return view('login', $data);
    }
}

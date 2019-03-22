<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController2 extends Controller
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
        return view('home', $data);
    }

    public function login(){
      $data['title'] = 'Home';
      $data['subheader'] = ['title' => 'Dashboard', 'desc' => 'Data Health Check.'];
      return view('login', $data);
    }
}

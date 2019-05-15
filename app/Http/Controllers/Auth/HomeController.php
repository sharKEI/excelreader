<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Objects;
use App\Quarters;
use App\Places;
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
        $where = [];
        if(isset($_GET['obj'], $_GET['area'], $_GET['quart'])){
          if($_GET['obj']) array_push($where, ['object_id', '=', $_GET['obj']]);
          if($_GET['area']) array_push($where, ['place_id', '=', $_GET['area']]);
          if($_GET['quart']) array_push($where, ['quarter_id', '=', $_GET['quart']]);
        }
        $data['excels'] = Excels::where($where)->get();
        $data['quarters'] = Quarters::all()->sortBy('quarter')->sortBy('year');
        $data['objects'] = Objects::all()->sortBy('name');
        $data['places'] = Places::all()->sortBy('name');
        return view('home', $data);
    }

    public function login(){
      $data['title'] = 'Home';
      $data['subheader'] = ['title' => 'Dashboard', 'desc' => 'Data Health Check.'];
      return view('login', $data);
    }
}

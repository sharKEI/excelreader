<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function register(Request $request)
    {
      //Add a new users

      /* Form validation */
      $request->validate([
          'staff_id' => 'required',
          'password' => 'required',
      ]);

      $staff_id = $request->input('staff_id');
      $password = $request->input('password');
      $user = new User();
      $user->staff_id=$staff_id;
      $user->password=Hash::make($password);
      $user->admin=0;
      if($user->save())
          $flashmsg = ['success', "have successfully been added!"];
      else
          $flashmsg = ['error', "An error has occured."];
      return redirect(route('loginpage'))->with($flashmsg[0], $flashmsg[1]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'staff_id' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        return User::create([
            'staff_id' =>$request->input('staff_id'),
            'password' =>$request->input('password'),
            'admin' => 0,
        ]);
        return view('login');
    }

    public function store(Request $request)
    {
      //print_r($request->input());
      $register=new \App\Auth\User;
      $passport->name=$request->get('name');
      $passport->email=$request->get('email');
      $passport->password=$request->get('password');
    }
}

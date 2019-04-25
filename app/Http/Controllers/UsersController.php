<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //form for users
        $data['title'] = 'Manage users';
        $data['subheader'] = ['title' => 'Manage Users', 'desc' => 'View, Add or Edit user(s).'];

        $data['users'] = User::all();

        return view('user', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $data['title'] = 'My profile';
        $data['subheader'] = ['title' => 'Manage Profile', 'desc' => 'View or Edit profile.'];
        $data['user'] = Auth::user();
        return view('auth/profile', $data);
    }

    public function updateprofile(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'staff_id' => ['required', 'string', 'max:255', 'unique:users'],
        ]);

        $user = User::find(Auth::user()['id']);
        $user->name = $request->name;
        $user->staff_id = $request->staff_id;
        try{
            $user->save();
            $flashmsg = ['success', "Profile have been changed successfully!"];
            return redirect(route('user.profile'))->with($flashmsg[0], $flashmsg[1]);
        }
        catch (\Exception $e){
            $flashmsg = ['error', "An error has occured. Please contact the admin."];
            return redirect(route('user.profile'))->with($flashmsg[0], $flashmsg[1]);
        }
    }

    public function chgpass(Request $request){
        $request->validate([
            'op' => 'required',
            'np' => 'required|min:8',
            'rp' => 'required|min:8',
        ]);

        $op = $request->input('op');
        $np = $request->input('np');
        $rp = $request->input('rp');

        $user = User::find(Auth::user()['id']);
        if(!Hash::check($op, $user->password)){
            $flashmsg = ['error', "Your current password is wrong."];
            return redirect(route('user.profile'))->with($flashmsg[0], $flashmsg[1]);
        }

        if($np != $rp){
            $flashmsg = ['error', "Your retype password is not the same."];
            return redirect(route('user.profile'))->with($flashmsg[0], $flashmsg[1]);
        }

        $user->password = Hash::make($np);
        try{
            $user->save();
            $flashmsg = ['success', "Password have been changed successfully!"];
            return redirect(route('user.profile'))->with($flashmsg[0], $flashmsg[1]);
        }
        catch (\Exception $e){
            $flashmsg = ['error', "An error has occured. Please contact the admin."];
            return redirect(route('user.profile'))->with($flashmsg[0], $flashmsg[1]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'type' => 'required',
            'user_id' => 'required'
        ));

        $user = User::find($request->input('user_id'));
        $type = $request->input('type');

        if ($type == 'activate'){
            $user->active = !$user->active;
        }
        else if ($type == 'admin'){
            $user->admin = !$user->admin;
        }

        try{
            $user->save();
            $flashmsg = ['success', "user have successfully been updated!"];
            return redirect(route('users.index'))->with($flashmsg[0], $flashmsg[1]);
        }
        catch (\Exception $e){
            $flashmsg = ['error', "An error has occured. user is already exist."];
            return redirect(route('users.index'))->with($flashmsg[0], $flashmsg[1]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $user = User::find($id);
            $user->delete();
            $flashmsg = ['success', "User successfully deleted."];
            return redirect(route('users.index'))->with($flashmsg[0], $flashmsg[1]);
        }
        catch(\Exception $e){
            $flashmsg = ['error', "An error has occured. If problem persist, contact the admin."];
            return redirect(route('users.index'))->with($flashmsg[0], $flashmsg[1]);
        }
    }

    public function adduser(Request $request)
    {
      $this->validate($request, array(
          'name' => 'required',
          'staff_id' => 'required',
          'email' => 'required',
          'password' => 'required',
      ));

      User::create([
          'name' => $request->input('name'),
          'staff_id' => $request->input('staff_id'),
          'email' => $request->input('email'),
          'password' => Hash::make($request->input('password')),
          'admin' => 0,
          'active' => 0,
      ]);

      return redirect()->back();
    }
}

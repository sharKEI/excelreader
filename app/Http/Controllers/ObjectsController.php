<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Objects;
use Excel;

class ObjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //form for creating object
        $data['title'] = 'Manage objects';
        $data['subheader'] = ['title' => 'Manage Objects', 'desc' => 'View, Add or Edit Object(s).'];

        $data['objects'] = Objects::all()->sortBy('name');
        $data['count'] = 1;

        return view('object', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        //Add a new objects

        /* Form validation */
        $request->validate([
            'name' => 'required|unique:objects|max:255',
        ]);

        $name = $request->input('name');
        $object = new Objects();
        $object->name = $name;
        $object->user_id = $request->user()->id;
        if($object->save())
            $flashmsg = ['success', "Object '$name' have successfully been added!"];
        else
            $flashmsg = ['error', "An error has occured."];
        return redirect(route('object.index'))->with($flashmsg[0], $flashmsg[1]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //Update an object
        $name = $request->input('name');
        $object = Objects::find($id);
        $object->name = $name;
        $object->user_id = $request->user()->id;
        if($object->save())
            $flashmsg = ['success', "Object '$name' have successfully been changed!"];
        else
            $flashmsg = ['error', "An error has occured."];
        return redirect(route('object.index'))->with($flashmsg[0], $flashmsg[1]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete an object
        try{
            Objects::destroy($id);
            $flashmsg = ['success', "Object have been deleted!"];
            return redirect(route('object.index'))->with($flashmsg[0], $flashmsg[1]);
        }
        catch (\Exception $e){
            $flashmsg = ['error', "Object still have records! Cannot delete. If problem persist, please contact the admin."];
            return redirect(route('object.index'))->with($flashmsg[0], $flashmsg[1]);
        }
    }
}

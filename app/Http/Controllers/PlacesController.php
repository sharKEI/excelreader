<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Places;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Main setting page for places
        $data['title'] = 'Manage Places';
        $data['subheader'] = ['title' => 'Manage Places', 'desc' => 'View, Add or Edit Place(s).'];
        $data['places'] = Places::all();
        return view('place',$data);
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
        //Add new places

        /* Form validation */
        $request->validate([
            'name' => 'required|unique:places|max:255',
        ]);
        
        /* Insert data */
        $name = $request->input('name');
        $place = new Places();
        $place->name = $name;
        if($place->save())
            $flashmsg = ['success', "Place '$name' have successfully been added!"];
        else
            $flashmsg = ['error', "An error has occured."];
        return redirect(route('place.index'))->with($flashmsg[0], $flashmsg[1]);
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
        //Update a place
        $name = $request->input('name');
        $place = Places::find($id);
        $place->name = $name;
        if($place->save())
            $flashmsg = ['success', "Place '$name' have successfully been changed!"];
        else
            $flashmsg = ['error', "An error has occured."];
        return redirect(route('place.index'))->with($flashmsg[0], $flashmsg[1]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete a place
        if(Places::destroy($id))
            $flashmsg = ['success', "Place have been deleted!"];
        else
            $flashmsg = ['error', "An error has occured."];
        return redirect(route('place.index'))->with($flashmsg[0], $flashmsg[1]);
    }
}

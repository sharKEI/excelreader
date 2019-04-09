<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Places;
use App\Maps;

class MapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Maps Collections';
        $data['subheader'] = ['title' => 'Map Collections', 'desc' => 'View map collections.'];
        $data['places'] = Places::all();
        $data['maps'] = Maps::all();
        return view('map',$data);
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
        $this->validate($request, array(
            'title' => 'required',
            'img' => 'required|mimes:jpeg,bmp,png,jpg',
            'place' => 'required',
        ));

        $place = Places::find($request->input('place'))->name;
        $file = $request->file('img');

        $destinationPath = "storage/uploads/maps/$place";

        $map = new Maps();
        $map->title = $request->input('title');
        $map->img = $file->getClientOriginalName();
        $map->place_id = $request->input('place');
        $map->user_id = $request->user()->id;

        try{
            $map->save();
        }
        catch(\Exception $e){
            $flashmsg = ['error', "An error has occured. If problem persist, contact the admina."];
            return redirect()->back()->with($flashmsg[0], $flashmsg[1]);
        }

        try{
            $file->move($destinationPath ,$map->id.' '.$map->img);
            $flashmsg = ['success', "New map added. Image successfully uploaded."];
            return redirect()->back()->with($flashmsg[0], $flashmsg[1]);
        }
        catch(\Exception $e){
            $map->delete();
            $flashmsg = ['error', "An error has occured. If problem persist, contact the admin."];
            return redirect()->back()->with($flashmsg[0], $flashmsg[1]);
        }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $map = Maps::find($id);
        $place = $map->place->name;
        try{
            unlink(public_path()."/storage/uploads/maps/$place/$map->id $map->img");
        }
        catch (\Exception $e){
            $flashmsg = ['error', "Cannot delete. If problem persist, please contact the admin."];
            return redirect(route('map.index'))->with($flashmsg[0], $flashmsg[1]);
        }

        try{
            Maps::destroy($id);
            $flashmsg = ['success', "Map have been deleted!"];
            return redirect(route('map.index'))->with($flashmsg[0], $flashmsg[1]);
        }
        catch (\Exception $e){
            $flashmsg = ['error', "Cannot delete. If problem persist, please contact the admin."];
            return redirect(route('map.index'))->with($flashmsg[0], $flashmsg[1]);
        }
    }
}

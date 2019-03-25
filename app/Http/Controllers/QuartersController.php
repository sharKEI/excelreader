<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quarters;

class QuartersController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //form for creating object
        $data['title'] = 'Manage Quarters';
        $data['subheader'] = ['title' => 'Manage Quarters', 'desc' => 'View, Add or Edit Quarter(s).'];

        $data['quarters'] = Quarters::all();

        return view('quarter', $data);
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
        //Add a new quarter

        /* Form validation */
        $request->validate([
            'quarter' => 'required',
            'year' => 'required',
        ]);

        $quart = $request->input('quarter');
        $year = $request->input('year');
        
        $check = Quarters::where('year', $year)->where('quarter', $quart)->get();
            
        if (sizeof($check) > 0) {
            $flashmsg = ['error', "Quarter 'Q$quart $year' already created."];
            return redirect(route('quarter.index'))->with($flashmsg[0], $flashmsg[1]);
        }

        $quarter = new Quarters();
        $quarter->quarter = $quart;
        $quarter->year = $year;
        $quarter->user_id = $request->user()->id;
        if($quarter->save())
            $flashmsg = ['success', "Quarter 'Q$quart $year' have successfully been added!"];
        else
            $flashmsg = ['error', "An error has occured."];
        return redirect(route('quarter.index'))->with($flashmsg[0], $flashmsg[1]);
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
            Quarters::destroy($id);
            $flashmsg = ['success', "Quarter have been deleted!"];
            return redirect(route('quarter.index'))->with($flashmsg[0], $flashmsg[1]);
        }
        catch (\Exception $e){
            $flashmsg = ['error', "Quarter still have records! Cannot delete. If problem persist, please contact the admin."];
            return redirect(route('quarter.index'))->with($flashmsg[0], $flashmsg[1]);
        }
    }
}

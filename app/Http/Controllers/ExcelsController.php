<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Excels;
use App\Objects;
use App\Places;
use App\Quarters;
use Excel;


class ExcelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Main excel upload form
        $data['title'] = 'Manage';
        $data['subheader'] = ['title' => 'Manage Excels', 'desc' => 'View, Add or Edit Excel(s).'];
        $data['excels'] = Excels::all();
        return view('excel',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Excel upload form
        $data['title'] = 'Add New Excel';
        $data['subheader'] = ['title' => 'Add new Excel', 'desc' => 'Upload Form'];

        $data['objects'] = Objects::all();
        $data['places'] = Places::all();
        $data['quarters'] = Quarters::all();
        return view('excelform',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Store excel
        $this->validate($request, array(
            'object' => 'required',
            'place' => 'required',
            'quarter' => 'required',
            'xlfile' => 'required',
        ));

        $file = $request->file('xlfile');

        $path = $file->getRealPath();
        try{
            $datas = Excel::selectSheets('Output')->load($path)->get(array('check'));
            $fail = 0;
            $pass = 0;
            foreach ($datas as $data) {
                if ($data['check'] == 'Fail')
                    $fail += 1;
                if ($data['check'] == 'Pass')
                    $pass += 1;
            }
            $attcomp = $pass / ($fail + $pass) * 100;
        }
        catch (\Exception $e){
            $flashmsg = ['error', "Wrong excel formatting."];
            return redirect(route('excel.index'))->with($flashmsg[0], $flashmsg[1]);
        }
   
        $excel = new Excels();
        $excel->object_id = $request->input('object');
        $excel->place_id = $request->input('place');
        $excel->quarter_id = $request->input('quarter');
        $excel->attcomp = $attcomp;
        $excel->filename = $file->getClientOriginalName();
        $excel->unval = $request->input('object').$request->input('place').$request->input('quarter');

        if (Excels::where('unval', '=', $excel->unval)->exists()) {
            $flashmsg = ['error', "Excel already uploaded."];
            return redirect(route('excel.index'))->with($flashmsg[0], $flashmsg[1]);
         }

        if(!$excel->save()){
            $flashmsg = ['error', "An error has occured."];
            return redirect(route('object.index'))->with($flashmsg[0], $flashmsg[1]);
        }

        //Move Uploaded File
        $destinationPath = 'uploads';

        if($file->move($destinationPath,$excel->id.$file->getClientOriginalName()))
            $flashmsg = ['sucess', "Excel successfully uploaded."];
        else
            $flashmsg = ['error', "Fail to upload the excel. Please contact the admin."];
        return redirect(route('excel.index'))->with($flashmsg[0], $flashmsg[1]);

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
    }
}

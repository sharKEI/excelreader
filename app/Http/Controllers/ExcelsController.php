<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Excels;
use App\Revisions;
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
        $data['title'] = 'Manage Excel';
        $data['subheader'] = ['title' => 'Manage Excels', 'desc' => 'View, Add or Edit Excel(s).'];
        $data['excels'] = Excels::all();
        $data['objects'] = Objects::all();
        $data['places'] = Places::all();
        $data['quarters'] = Quarters::all();
        return view('excel',$data);
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
        //Store excel
        $this->validate($request, array(
            'object' => 'required',
            'place' => 'required',
            'quarter' => 'required',
        ));

        // $file = $request->file('xlfile');

        // $path = $file->getRealPath();
        // try{
        //     $datas = Excel::selectSheets('Output')->load($path)->get(array('check'));
        //     $fail = 0;
        //     $pass = 0;
        //     foreach ($datas as $data) {
        //         if ($data['check'] == 'Fail')
        //             $fail += 1;
        //         if ($data['check'] == 'Pass')
        //             $pass += 1;
        //     }
        //     $attcomp = $pass / ($fail + $pass) * 100;
        // }
        // catch (\Exception $e){
        //     $flashmsg = ['error', "Wrong excel formatting."];
        //     return redirect(route('excel.index'))->with($flashmsg[0], $flashmsg[1]);
        // }
   
        $excel = new Excels();
        $excel->object_id = $request->input('object');
        $excel->place_id = $request->input('place');
        $excel->quarter_id = $request->input('quarter');

        try{
            $excel->save();
            $flashmsg = ['success', "Excel successfully added."];
            return redirect(route('excel.index'))->with($flashmsg[0], $flashmsg[1]);
        }
        catch(\Exception $e){
            $flashmsg = ['error', "Excel already exists. If problem persist, contact the admin."];
            return redirect(route('excel.index'))->with($flashmsg[0], $flashmsg[1]);
        }

        // if (Excels::where('unval', '=', $excel->unval)->exists()) {
        //     $flashmsg = ['error', "Excel already uploaded."];
        //     return redirect(route('excel.index'))->with($flashmsg[0], $flashmsg[1]);
        //  }



        //Move Uploaded File
        // $destinationPath = 'uploads';

        // if($file->move($destinationPath,$excel->id.$file->getClientOriginalName()))
        //     $flashmsg = ['sucess', "Excel successfully uploaded."];
        // else
        //     $flashmsg = ['error', "Fail to upload the excel. Please contact the admin."];
        // return redirect(route('excel.index'))->with($flashmsg[0], $flashmsg[1]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Show excel revisions
        $data['title'] = 'Manage Excel Revisions';
        $data['subheader'] = ['title' => 'Manage Excel Revision', 'desc' => 'View, Add or Edit Excel Revisions.'];
        $data['excel'] = Excels::find($id);
        $data['revisions'] = Revisions::where(['excel_id' =>$id])->orderBy('updated_at', 'desc')->get();
        return view('excelrevs',$data);
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
        $this->validate($request, array(
            'object' => 'required',
            'place' => 'required',
            'quarter' => 'required',
            'excel_id' => 'required'
        ));

        $excel = Excels::find($request->input('excel_id'));
        $excel->object_id = $request->input('object');
        $excel->place_id = $request->input('place');
        $excel->quarter_id = $request->input('quarter');

        try{
            $excel->save();
            $flashmsg = ['success', "Excel have successfully been updated!"];
            return redirect(route('excel.index'))->with($flashmsg[0], $flashmsg[1]);
        }
        catch (\Exception $e){
            $flashmsg = ['error', "An error has occured. Excel is already exist."];
            return redirect(route('excel.index'))->with($flashmsg[0], $flashmsg[1]);
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
        //
        try{
            $excel = Excels::find($id);
            $excel->delete();
            $flashmsg = ['success', "Excel successfully deleted."];
            return redirect(route('excel.index'))->with($flashmsg[0], $flashmsg[1]);
        }
        catch(\Exception $e){
            $flashmsg = ['error', "Cannot delete excel, revisions depends on excel. If problem persist, contact the admin."];
            return redirect(route('excel.index'))->with($flashmsg[0], $flashmsg[1]);
        }
    }
}

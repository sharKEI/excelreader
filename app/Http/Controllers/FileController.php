<?php

namespace App\Http\Controllers;

use App\File;
use App\Quarters;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //Main excel upload form
      $data['title'] = 'PDF Files';
      $data['subheader'] = ['title' => 'PDF Files', 'desc' => 'Upload PDF file(s).'];
      $data['files'] = File::all();
      $data['quarters'] = Quarters::all();
      return view('pdf',$data);
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
    // public function store(Request $request)
    // {
    //     $this->validate($request,[
    //       'filename'=>'required',
    //       'filename.*'=>'mimes:pdf'
    //     ]);
    //
    //     if($request->hasfile('filename'))
    //      {
    //
    //         foreach($request->file('filename') as $file)
    //         {
    //             $name=$file->getClientOriginalName();
    //             $file->move(public_path().'/files/', $name);
    //             $data[] = $name;
    //             $file= new File();
    //             $file->filename=json_encode($data);
    //
    //             $file->save();
    //         }
    //      }
    //
    //
    //
    //     return back()->with('success', 'Your files has been successfully added');
    // }
    public function store(Request $request)
    {
        $this->validate($request,[
          'filename'=>'required',
          'filename.*'=>'mimes:pdf'
        ]);

        $filename = $request->file('filename');
        $file = new File();
        $file->name = $request->input('name');
        $file->filename = $filename->getClientOriginalName();
        $file->quarter_id = $request->input('quarter');
        $file->user_id = $request->user()->id;
        $quarter = 'Q'.$file->quarter->quarter.' '.$file->quarter->year;
        $destinationPath = "storage/uploads/reports/$quarter";

        try{
            $file->save();
        }
        catch(\Exception $e){
            $flashmsg = ['error', "An error has occured. If problem persist, contact the admin."];
            return redirect()->back()->with($flashmsg[0], $flashmsg[1]);
        }

        try{
            $filename->move($destinationPath ,$file->id.' '.$file->filename);
            $flashmsg = ['success', "New file created. Excel successfully uploaded."];
            return redirect()->back()->with($flashmsg[0], $flashmsg[1]);
        }
        catch(\Exception $e){
            $file->delete();
            $flashmsg = ['error', "An error has occured. If problem persist, contact the admin."];
            return redirect()->back()->with($flashmsg[0], $flashmsg[1]);
        }



        return back()->with('success', 'Your files has been successfully added');
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
      $this->validate($request, array(
          'name' => 'required',
          'quarter' => 'required',
      ));

      $file = File::find($request->input('file_id'));
      $file->name = $request->input('name');
      $file->quarter_id = $request->input('quarter');

      try{
          $file->save();
          $flashmsg = ['success', "File have successfully been updated!"];
          return redirect(route('pdf.index'))->with($flashmsg[0], $flashmsg[1]);
      }
      catch (\Exception $e){
          $flashmsg = ['error', "An error has occured. Excel is already exist."];
          return redirect(route('pdf.index'))->with($flashmsg[0], $flashmsg[1]);
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
      $file = File::find($id);
      $quarter = 'Q'.$file->quarter->quarter.' '.$file->quarter->year;
      try{
          unlink(public_path()."/storage/uploads/reports/$quarter/$file->id $file->filename");
      }
      catch (\Exception $e){
          $flashmsg = ['error', "Cannot delete. If problem persist, please contact the Admin."];
          return redirect(route('pdf.index'))->with($flashmsg[0], $flashmsg[1]);
      }

      try{
          File::destroy($id);
          $flashmsg = ['success', "File have been deleted!"];
          return redirect(route('pdf.index'))->with($flashmsg[0], $flashmsg[1]);
      }
      catch (\Exception $e){
          $flashmsg = ['error', "Cannot delete. If problem persist, please contact the admin."];
          return redirect(route('pdf.index'))->with($flashmsg[0], $flashmsg[1]);
      }
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Revisions;
use App\Excels;
use Excel;

class RevisionsController extends Controller
{
    //
    public function store(Request $request){
        $this->validate($request, array(
            'notes' => 'required',
            'xlfile' => 'required',
            'excel_id' => 'required',
        ));

        $route = route('excel.show', ['id' => $request->input('excel_id')]);

        $revision = new Revisions();

        if ($request->file('xlfile') != null){
            $file = $request->file('xlfile');
            $excel = Excels::find($request->input('excel_id'));
            $place = $excel->place->name;
            $quarter = 'Q'.$excel->quarter->quarter.' '.$excel->quarter->year;
            $object = $excel->object->name;
            $id = $excel->id;
            $created_at = explode(' ', $excel->created_at)[0];
            $destinationPath = "uploads/$quarter/$place/$object/$id $created_at/";
            $newFileName = uniqid().' '.$file->getClientOriginalName();
            //try{
                $uploadedPath = Storage::disk('local')->putFileAs($destinationPath, $file, $newFileName);
                $revision->filename = $newFileName;
            // }
            // catch(\Exception $e){
            //     $flashmsg = ['error', "An error has occured. If problem persist, contact the admin.[Upload]"];
            //     return redirect()->back()->with($flashmsg[0], $flashmsg[1]);
            // }
        }

        // $path = $file->getPathName();
        // try{
        //     $datas = Excel::selectSheets()->load($path)->get(array('check'));
        //     $fail = 0;
        //     $pass = 0;
        //     //array_change_key_case($datas,CASE_LOWER);
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
        //     return redirect($route)->with($flashmsg[0], $flashmsg[1]);
        // }

        $revision->notes = $request->input('notes');
        $revision->excel_id = $request->input('excel_id');
        $revision->attcomp = null;
        $revision->attacc = null;
        $revision->spatacc = null;
        $revision->user_id = $request->user()->id;

        try{
            $revision->save();
            $flashmsg = ['success', "New revision created. Excel successfully uploaded."];
            return redirect()->back()->with($flashmsg[0], $flashmsg[1]);
        }
        catch(\Exception $e){
            $flashmsg = ['error', "An error has occured. If problem persist, contact the admin."];
            return redirect()->back()->with($flashmsg[0], $flashmsg[1]);
        }

    }

    public function show($id){
        $revision = Revisions::find($id);
        $object = $revision->excel->object->name;
        $quarter = 'Q'.$revision->excel->quarter->quarter.' '.$revision->excel->quarter->year;
        $place = $revision->excel->place->name;
        $filename = $revision->filename;
        $id = $revision->excel->id;
        $created_at = explode(' ', $revision->excel->created_at)[0];
        $path = "app/uploads/$quarter/$place/$object/$id $created_at/$filename";
        //echo storage_path($path);

		if(!file_exists(storage_path($path))){ // file does not exist
			die('file not found');
		} else {
// <<<<<<< HEAD
			// copy(public_path().$path, public_path().'/storage/'.$filename);
			header("Cache-Control: public");
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=$revision->filename");
			header("Content-Type: application/zip");
			header("Content-Transfer-Encoding: binary");

			// read the file from disk
			readfile(storage_path($path));
			// header("Location: ".url('/').'/storage/'.$filename);
// =======
			// copy(public_path().$path, public_path().'/storage/'.$filename);
			// header("Cache-Control: public");
			// header("Content-Description: File Transfer");
			// header("Content-Disposition: attachment; filename=$revision->filename");
			// header("Content-Type: application/zip");
			// header("Content-Transfer-Encoding: binary");

			// read the file from disk
			// readfile(public_path().'/storage/'.$filename);
      // echo url('/').$path;
			// header("Location: ".url('/').$path);
      // return redirect(url('/').$path);
// >>>>>>> 53691f27ff1cbbc38f12589d28530d371e2d71f7
			//unlink(public_path().'/storage/'.$filename);
		}

        // $ods = basename($filename, '.xlsx').'.ods';
        // $view = "storage/views/$ods";

        // if(file_exists(public_path().$view)){
            // echo 'test';
            // return redirect("ViewerJS/#../$view");
        // }

        // $input = public_path()."/$path";
        // $ods = basename($filename, '.xlsx').'.ods';
        // $output = public_path()."/storage/views/'$ods'";
        // exec("unoconv -f ods -o $output $input");
        // return redirect("ViewerJS/#../$view");

        // $revision = Revisions::find($id);
        // $object = $revision->excel->object->name;
        // $quarter = 'Q'.$revision->excel->quarter->quarter.' '.$revision->excel->quarter->year;
        // $place = $revision->excel->place->name;
        // $filename = $revision->id.' '.$revision->filename;
        // $path = "storage/uploads/$quarter/$place/$object/$filename";

        // $excel = Excel::load($path)->get();

        // //dd($excel);

        // foreach($excel as $sheet){
        //     echo '<div class="clusterize"><table><thead><tr>';
        //     foreach($sheet->getHeading() as $heading){
        //         echo "<th>$heading</th>";
        //     }
        //     echo '</tr></thead></table><div id="scrollArea" class="clusterize-scroll"><table><tbody id="contentArea" class="clusterize-content">';
        //     foreach($sheet as $row){
        //         echo '<tr>';
        //         foreach($row as $data){
        //             echo ($data != "") ? "<td>$data</td>" : "<td></td>";
        //         }
        //         echo '</tr>';
        //     }
        //     echo '</tbody></table></div></div><br><hr><br>';
        //     break;
        // }

    }

    public function update(Request $request, $id)
    {
        //Update an Attribute Accuracy
        // if($request->input('attacc')||$request->input('spatacc')){
        //   $flashmsg = ['error', "Cannot enter the value '0'."];
        // }

        $revision = Revisions::find($id);
        if($request->input('attacc') != null){
          $revision->attacc= (int)$request->input('attacc');
          $valupdate=$revision->attacc;
        }
        else if($request->input('attcomp') != null){
            $revision->attcomp= (int)$request->input('attcomp');
            $valupdate=$revision->attcomp;
          }
        else {
          $revision->spatacc= (int)$request->input('spatacc');
          $valupdate=$revision->spatacc;
        }
        $revision->user_id = $request->user()->id;
        if($revision->save())
            $flashmsg = ['success', "Value '$valupdate' have successfully been added!"];
        else
            $flashmsg = ['error', "An error has occured."];
        return redirect()->back()->with($flashmsg[0], $flashmsg[1]);
    }

}

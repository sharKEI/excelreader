<?php

namespace App\Http\Controllers;

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
        $file = $request->file('xlfile');

        $path = $file->getPathName();
        try{
            $datas = Excel::selectSheets()->load($path)->get(array('check'));
            $fail = 0;
            $pass = 0;
            //array_change_key_case($datas,CASE_LOWER);
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
            return redirect($route)->with($flashmsg[0], $flashmsg[1]);
        }

        $revision = new Revisions();
        $revision->notes = $request->input('notes');
        $revision->filename = $file->getClientOriginalName();
        $revision->excel_id = $request->input('excel_id');
        $revision->attcomp = $attcomp;
        $revision->user_id = $request->user()->id;

        $excel = Excels::find($revision->excel_id);
        $place = $excel->place->name;
        $quarter = 'Q'.$excel->quarter->quarter.' '.$excel->quarter->year;
        $object = $excel->object->name;
        $destinationPath = "storage/uploads/$quarter/$place/$object";

        try{
            $revision->save();
        }
        catch(\Exception $e){
            $flashmsg = ['error', "An error has occured. If problem persist, contact the admin."];
            return redirect()->back()->with($flashmsg[0], $flashmsg[1]);
        }

        try{
            $file->move($destinationPath ,$revision->id.' '.$revision->filename);
            $flashmsg = ['success', "New revision created. Excel successfully uploaded."];
            return redirect()->back()->with($flashmsg[0], $flashmsg[1]);
        }
        catch(\Exception $e){
            $revision->delete();
            $flashmsg = ['error', "An error has occured. If problem persist, contact the admin."];
            return redirect()->back()->with($flashmsg[0], $flashmsg[1]);
        }

    }

    public function show($id){
        $revision = Revisions::find($id);
        $object = $revision->excel->object->name;
        $quarter = 'Q'.$revision->excel->quarter->quarter.' '.$revision->excel->quarter->year;
        $place = $revision->excel->place->name;
        $filename = $revision->id.' '.$revision->filename;
        $path = "/storage/uploads/$quarter/$place/$object/$filename";

		if(!file_exists(public_path().$path)){ // file does not exist
			die('file not found');
		} else {
			// copy(public_path().$path, public_path().'/storage/'.$filename);
			header("Cache-Control: public");
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=$revision->filename");
			header("Content-Type: application/zip");
			header("Content-Transfer-Encoding: binary");

			// read the file from disk
			readfile(public_path().$path);
			// header("Location: ".url('/').'/storage/'.$filename);
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
        $name = $request->input('attacc');
        $revision = Revisions::find($id);
        $revision->attacc = $attacc;
        $revision->user_id = $request->user()->id;
        if($object->save())
            $flashmsg = ['success', "Object '$name' have successfully been changed!"];
        else
            $flashmsg = ['error', "An error has occured."];
        return redirect(route('object.index'))->with($flashmsg[0], $flashmsg[1]);
    }

}

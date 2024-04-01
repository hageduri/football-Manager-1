<?php

namespace App\Http\Controllers;

use App\Models\district_id;
use App\Models\gender;
use App\Models\position;
use App\Models\test1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class test1Controller extends Controller
{
    function showTest1(){
        $data= test1::all();
        $gendata = gender::all();
        $distdata = district_id::all();
        $posdata = position::all();
        $i=1;
        // return view('testview/test1index', ['test1s'=>$data],['gens'=>$gendata],['pos'=>$posdata]);
        return view('testview/test1index', ['test1s'=>$data, 'gens'=>$gendata, 'dist'=>$distdata, 'pos'=>$posdata, 'i'=>$i]);
    }

    function insertTest1(Request $request){

        $validate = request()->validate([
            'name' => 'required|min:2',
            'test1_id' => 'required|numeric',
            'gender' => 'required|numeric',
            'district' => 'required|numeric',
            'position' => 'required|numeric',
            'latitude' => 'nullable',
            'longitude' => 'nullable'
        ]);

        // $test1 = test1::findOrFail($id);

        $newPlayer = test1::create($validate);

        if($request->has('photo')){

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();

            $path = 'uploads/category/';
            $filename = time().'.'.$extension;
            $file->move($path, $filename);

            $newPlayer->photo=$path.$filename;
            $newPlayer->save();
            
        }
        return redirect('test1');

        // return view('test1_list', ['data'=>$data]);
    }

    function getGenPosDist(){
        $gendata = gender::all();
        $distdata = district_id::all();
        $posdata = position::all();
        
        return view('testview/test1Upload', ['gendata'=>$gendata, 'distdata'=>$distdata,'posdata'=>$posdata ]);
    }

    function removeTest1($id){
        $data= test1::findOrFail($id);
        
        if($data->photo!==null){

            $photo=$data->photo;
            // $path = $data->photo;
            
            File::delete($photo);
            
        }
        $data->delete();
        return redirect('test1');

        // echo $data;
    }

    function editShowTest1($id){
        $i=0;
        $data = test1::findOrFail($id);
        $gendata = gender::all();
        $distdata = district_id::all();
        $posdata = position::all();

        return view('testview/test1Update', ['i'=>$i,'data'=>$data,'gendata'=>$gendata, 'distdata'=>$distdata,'posdata'=>$posdata]);

    }

    function UpdateTest1(Request $request, $id){
        $data= test1::findOrFail($id);
        
        $data->name=$request->name;
        $data->test1_id=$request->test1_id;
        $data->gender=$request->gender;
        $data->district=$request->district;
        $data->position=$request->position;
        $data->latitude=$request->latitude;
        $data->longitude=$request->longitude;
        
        

        if($request->hasfile('photo')){        
            
            
            //code for remove old file
            if($data->photo!==null){

                $photo=$data->photo;
                // $path = $data->photo;
                
                File::delete($photo);
                $data->photo=NULL;
                
            }
            //upload new file
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
        
            $path = 'uploads/category/';
            $filename = time().'.'.$extension;
            $file->move($path, $filename);
    
  
            //for update in table
            $data->photo= $path.$filename;
       }
       $data->save();
        
        return redirect('test1');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\district_id;
use App\Models\gender;
use App\Models\position;
use App\Models\test2;
use App\Models\town;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class test2Controller extends Controller
{
    function showTest2(){
        $data= test2::all();
        $gendata = gender::all();
        $distdata = district_id::all();
        $towndata = town::all();
        $posdata = position::all();
        $i=1;
        
        return view('testview/test2index', ['test2s'=>$data, 'gens'=>$gendata, 'dist'=>$distdata, 'town'=>$towndata,'pos'=>$posdata, 'i'=>$i]);
    }

    
    function insertTest2(Request $request){

        $validate = request()->validate([
            'name' => 'required|min:2',
            'test2_id' => 'required|numeric',
            'gender' => 'required|numeric',
            'district' => 'required|numeric',
            'town' => 'required',
            'position' => 'required|numeric',
            'latitude' => 'nullable',
            'longitude' => 'nullable'
        ]);

    
        // $data['towns'] = town::where('district_id',$request->district_id)->get(['name','town_id']);
 
        // return response()->json($data);
    

        // $test2 = test2::findOrFail($id);


        $newPlayer = test2::create($validate);

        if($request->has('photo')){

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();

            $path = 'uploads/category/';
            $filename = time().'.'.$extension;
            $file->move($path, $filename);

            $newPlayer->photo=$path.$filename;
            $newPlayer->save();
            
        }

        return view('test2');
        
    }

    function getGenPosDist(){
        $gendata = gender::all();
        $distdata = district_id::all();
        $towndata = town::all();
        $posdata = position::all();
        
        return view('testview/test2Upload', ['gendata'=>$gendata, 'distdata'=>$distdata, 'towndata'=>$towndata,'posdata'=>$posdata ]);
    }

    function removeTest1($id){
        $data= test2::findOrFail($id);
        
        if($data->photo!==null){

            $photo=$data->photo;
            // $path = $data->photo;
            
            File::delete($photo);
            
        }
        $data->delete();
        return redirect('test2');

        // echo $data;
    }

    function editShowTest2($id){
        $i=0;
        $data = test2::findOrFail($id);
        $gendata = gender::all();
        $distdata = district_id::all();
        $towndata = town::all();
        $posdata = position::all();


        return view('testview/test2Update', ['i'=>$i,'data'=>$data,'gendata'=>$gendata, 'distdata'=>$distdata, 'towndata'=>$towndata,'posdata'=>$posdata]);

    }

    function UpdateTest2(Request $request, $id){
        $data= test2::findOrFail($id);
        
        $data->name=$request->name;
        $data->test2_id=$request->test2_id;
        $data->gender=$request->gender;
        $data->district=$request->district;
        $data->town=$request->town;
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
        
        return redirect('test2');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\district_id;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class districtController extends Controller
{
    function show(){
        $data= district_id::all();
        return view('dist_list', ['district_ids'=>$data]);
    }

    function insert(Request $request){
        $data = new district_id;

        $data->name=$request->input('name');
        $data->district_id=$request->input('district_id');

        $data->save();

        return redirect('dist_list');
    }

    function remove($id){
        $data= district_id::find($id);
        $data->delete();
        return redirect('dist_list');
    }


    function editShow($id){
        $data = district_id::find($id);
        return view('dist_edit', ['data'=>$data]);

    }

    function dist_update(Request $request){
        $data= district_id::find($request->id);
        $data->name=$request->name;
        $data->district_id=$request->district_id;
        $data->save();
        return redirect('dist_list');
    }
    
}

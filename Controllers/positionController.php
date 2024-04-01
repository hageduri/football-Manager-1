<?php

namespace App\Http\Controllers;

use App\Models\position;
use Illuminate\Http\Request;

class positionController extends Controller
{
    function show3(){
        $data= position::all();
        return view('position_list', ['positions'=>$data]);
    }

    function insert3(Request $request){
        $data = new position;

        $data->name=$request->input('name');
        $data->position_id=$request->input('position_id');

        $data->save();

        return redirect('position_list');
    }

    function remove3($id){
        $data= position::find($id);
        $data->delete();
        return redirect('position_list');
    }


    function editShow3($id){
        $data = position::find($id);
        return view('pos_edit', ['data'=>$data]);

    }

    function pos_update(Request $request){
        $data= position::find($request->id);
        $data->name=$request->name;
        $data->position_id=$request->position_id;
        $data->save();
        return redirect('position_list');
    }
}

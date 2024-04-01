<?php

namespace App\Http\Controllers;

use App\Models\district_id;
use App\Models\town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Command\WhereamiCommand;

class distownController extends Controller
{ 
    public function getDist()
    {
        $dists = district_id::get(['name','district_id']);
 
        return view('dropdown',compact('dists'));
    }
 
    public function getTown(Request $request)
    {
        $data['towns'] = town::where('district_id',$request->district_id)->get(['name','town_id']);
 
        return response()->json($data);
    }
}

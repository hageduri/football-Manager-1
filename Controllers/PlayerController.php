<?php

namespace App\Http\Controllers;

use App\Models\player;
// use App\Http\Requests\StoreplayerRequest;
use App\Http\Requests\UpdateplayerRequest;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= player::all();
        return view('play_list', ['players'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new player;

        $data->fname=$request->input('fname');
        $data->lname=$request->input('lname');
        $data->gender=$request->input('gender');
        $data->position=$request->input('position');
        $data->address1=$request->input('address1');
        $data->address2=$request->input('address2');
        $data->district_id=$request->input('district_id');
        $data->pin_code=$request->input('pin_code');
        $data->photo=$request->input('photo');
        $data->phone=$request->input('phone');
        $data->email=$request->input('email');
        $data->aadhar=$request->input('aadhar');
        
        $data->save();

        return redirect('play_list');
    }

    /**
     * Display the specified resource.
     */
    public function show(player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateplayerRequest $request, player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(player $player)
    {
        //
    }
}

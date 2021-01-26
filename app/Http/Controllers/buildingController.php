<?php

namespace App\Http\Controllers;

use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\building;

class buildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=building::all();
        return view('building.index',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('building.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'projecct'=>'required',
            'fmcode'=>'required',
            'area'=>'required',
            'address'=>'required',
            'zone'=>'required',
            'lat'=>'required',
            'long'=>'required',
            'contact'=>'required',
            'phone'=>'required',
            'numberlayer'=>'required',
            'floorbuilding'=>'required',
            'roomnumber'=>'required',
            'balance'=>'required'
        ]);
        building::create($request->all());
        return redirect('/building');
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
        $data=building::find($id);
        return view('building.edit',compact(['data']));
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
        $request->validate([
            'projecct'=>'required',
            'fmcode'=>'required',
            'area'=>'required',
            'address'=>'required',
            'zone'=>'required',
            'lat'=>'required',
            'long'=>'required',
            'contact'=>'required',
            'phone'=>'required',
            'numberlayer'=>'required',
            'floorbuilding'=>'required',
            'roomnumber'=>'required',
            'balance'=>'required'
        ]);
        building::find($id)->update($request->all());
        return redirect('/building');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        building::find($id)->delete();
        return redirect('/building');
    }
}

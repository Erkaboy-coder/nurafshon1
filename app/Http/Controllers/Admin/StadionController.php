<?php

namespace App\Http\Controllers\Admin;

use App\Stadion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StadionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.stadions.stadions');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stadions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stadion = new Stadion();
        $path =  $request->file('image')->store('images', 'public');
        $stadion->stadion_title=$request->stadion_title;
        $stadion->stadion_slug=$request->stadion_slug;
        $stadion->stadion_body=$request->stadion_body;
        $stadion->lang_id=$request->lang_id;
        $stadion->image =$path;
        $stadion->save();
        return redirect()->route('admin.stadions.index');
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
        $stadion = Stadion::find($id);
        return view('admin.stadions.edit',['stadion'=>$stadion]);
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
        $stadion = Stadion::find($id);
        $stadion->stadion_title=$request->stadion_title;
        $stadion->stadion_slug=$request->stadion_slug;
        $stadion->stadion_body=$request->stadion_body;
        $stadion->lang_id=$request->lang_id;

        $path = "";
        if ($request->file('image')){
            $path = $request->file('image')->store('images', 'public');
        }
        if($path != ""){
            $stadion->image =$path;
        }
        else{
            $stadion->image=$stadion->image;
        }
        $stadion->save();
        return redirect()->route('admin.stadions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stadion= Stadion::find($id);
        $stadion->delete();
        return redirect()->route('admin.stadions.index');
    }
}

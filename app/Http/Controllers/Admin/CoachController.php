<?php

namespace App\Http\Controllers\Admin;

use App\Coach;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Foto;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.coaches.coaches');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coaches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coach = new Coach();
        $path =  $request->file('image')->store('images', 'public');
        $coach->fio=$request->fio;
        $coach->position=$request->position;
        $coach->age=$request->age;
        $coach->region=$request->region;
        $coach->lang_id=$request->lang_id;
        $coach->image =$path;
        $coach->save();
        return redirect()->route('admin.coaches.index');
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
        $coach = Coach::find($id);
        return view('admin.coaches.edit',['coach'=>$coach]);
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
        $coach = Coach::find($id);
        $coach->fio=$request->fio;
        $coach->position=$request->position;
        $coach->age=$request->age;
        $coach->region=$request->region;
        $coach->lang_id=$request->lang_id;

        $path = "";
        if ($request->file('image')){
            $path = $request->file('image')->store('images', 'public');
        }
        if($path != ""){
            $coach->image =$path;
        }
        else{
            $coach->image=$coach->image;
        }
        $coach->save();
        return redirect()->route('admin.coaches.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coach= Coach::find($id);
        $coach->delete();
        return redirect()->route('admin.coaches.index');
    }
}

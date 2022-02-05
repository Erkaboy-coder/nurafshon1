<?php

namespace App\Http\Controllers\Admin;

use App\Win;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Foto;

class WinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.wins.wins');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wins = new Win();
        $path =  $request->file('image')->store('images', 'public');
        $wins->wins_title=$request->wins_title;
        $wins->wins_body=$request->wins_body;
        $wins->lang_id=$request->lang_id;
        $wins->wins_image =$path;
        $wins->save();
        return redirect()->route('admin.wins.index');
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
        $wins = Win::find($id);
        return view('admin.wins.edit',['wins'=>$wins]);
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
        $wins = Win::find($id);
        $wins->wins_title=$request->wins_title;
        $wins->wins_body=$request->wins_body;
        $wins->lang_id=$request->lang_id;

        $path = "";
        if ($request->file('image')){
            $path = $request->file('image')->store('images', 'public');
        }
        if($path != ""){
            $wins->wins_image =$path;
        }
        else{
            $wins->wins_image=$wins->wins_image;
        }
        $wins->save();
        return redirect()->route('admin.wins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wins= Win::find($id);
        $wins->delete();
        return redirect()->route('admin.wins.index');
    }
}

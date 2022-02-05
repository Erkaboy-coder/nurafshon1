<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Foto;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.fotos.fotos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fotos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = new Foto();
        $path =  $request->file('image')->store('images', 'public');
        $foto->image_title=$request->image_title;
        $foto->image_slug=$request->image_slug;
        $foto->lang_id=$request->lang_id;
        $foto->image =$path;
        $foto->save();
        return redirect()->route('admin.fotos.index');
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
        $foto = Foto::find($id);
        return view('admin.fotos.edit',['foto'=>$foto]);
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
        $foto = Foto::find($id);
        $foto->image_title=$request->image_title;
        $foto->image_slug=$request->image_slug;
        $foto->lang_id=$request->lang_id;

        $path = "";
        if ($request->file('image')){
            $path = $request->file('image')->store('images', 'public');
        }
        if($path != ""){
            $foto->image =$path;
        }
        else{
            $foto->image=$foto->image;
        }
        $foto->save();
        return redirect()->route('admin.fotos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto= Foto::find($id);
        $foto->delete();
        return redirect()->route('admin.fotos.index');
    }
}

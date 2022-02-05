<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Worker;
use App\Http\Controllers\Controller;


class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.workers.workers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.workers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Worker();
        $path =  $request->file('image')->store('images', 'public');
        $team->fio=$request->fio;
        $team->position=$request->position;
        $team->tel_number=$request->tel_number;
        $team->category_id=$request->category_id;
        $team->lang_id=$request->lang_id;
        $team->image =$path;
        $team->save();
        return redirect()->route('admin.workers.index');
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
        $worker = Worker::find($id);
        return view('admin.workers.edit',['worker'=>$worker]);
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
        $worker = Worker::find($id);
        $path = "";
        if ($request->file('image')){
            $path = $request->file('image')->store('images', 'public');
        }
        $worker->fio=$request->fio;
        $worker->position=$request->position;
        $worker->tel_number=$request->tel_number;

        $worker->category_id=$request->category_id;
        $worker->lang_id=$request->lang_id;

        if($path != ""){
            $worker->image =$path;
        }
        else{
            $worker->image=$worker->image;
        }
        $worker->save();
        return redirect()->route('admin.workers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $worker = Worker::find($id);
        $worker->delete();
        return redirect()->route('admin.workers.index');
    }
}

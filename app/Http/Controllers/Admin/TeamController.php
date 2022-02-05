<?php

namespace App\Http\Controllers\Admin;

use App\Stadium;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.teams.teams');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stadion = new  Stadium();


        $team = new Team();
        $path =  $request->file('image')->store('images', 'public');
        $team->name=$request->name;
        $team->region=$request->region;
        if($request->stadion != ""){
            $stadion->stadion_title=$request->stadion;
            $stadion->image="image";
            $stadion->about="about";
            $stadion->save();
            $team->stadium_id = $stadion->id;
        }elseif ($request->stadium != ""){
            $team->stadium_id=$request->stadium;
        }else{
            $team->stadium_id = $team->stadium_id;
        }
        $team->league_id=$request->league;
        $team->group_id=$request->group;
        $team->year=$request->year;
        $team->image =$path;
        $team->save();
        return redirect()->route('admin.teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::find($id);
        return view('admin.teams.show',['team'=>$team]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        return view('admin.teams.edit',['team'=>$team]);
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
        $stadion = new  Stadium();
        $team = Team::find($id);
        $path = "";
        if ($request->image == ""){
            $path = $team->image;
        }else{
            $path =  $request->file('image')->store('images', 'public');
        }

        $team->name=$request->name;
        $team->region=$request->region;
        if($request->stadion != ""){
            $stadion->stadion_title=$request->stadion;
            $stadion->image="image";
            $stadion->about="about";
            $stadion->save();
            $team->stadium_id = $stadion->id;
        }elseif ($request->stadium != ""){
            $team->stadium_id=$request->stadium;
        }else{
            $team->stadium_id = $team->stadium_id;
        }
        $team->league_id=$request->league;
        $team->group_id=$request->group;
        $team->year=$request->year;
        $team->image =$path;
        $team->save();
        return redirect()->route('admin.teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect()->route('admin.teams.index');

    }
}

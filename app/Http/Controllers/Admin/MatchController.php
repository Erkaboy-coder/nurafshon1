<?php

namespace App\Http\Controllers\Admin;

use App\cr;
use App\Match;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.matches.matches');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $i=1;
        while ($i <= 14) {
            $match = Match::find($i);
            $match->team_id=$request->input('team_id'.$i);
            $match->game=$request->input('game'.$i);       
            $match->win=$request->input('win'.$i);
            $match->lost=$request->input('lost'.$i);
            $match->goaldifference=$request->input('goaldifference'.$i);
            $match->score=$request->input('score'.$i);
            $match->equal=$request->input('equal'.$i);
            $match->save();
            // echo $request->team_id.$i;
            $i++;
        }
        return redirect()->route('admin.matches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}

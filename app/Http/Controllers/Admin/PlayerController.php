<?php

namespace App\Http\Controllers\Admin;

use App\Player;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use App\Position;
class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.players.players');
    }
    public function showplayer(Request $request){
         $player = Player::find($request->player_id);
         $position = Position::find($player->position_id);

         return Response::json($player);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.players.create');
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
            'name' => 'required|max:255',
            'region' => 'required',
        ]);
        $player = new Player();
        $path =  $request->file('image')->store('images', 'public');
        $player->fio=$request->name;
        $player->region=$request->region;
        $player->player_number=$request->player_number;
        $player->birthday=$request->birthday;
        $player->weight=$request->weight;
        $player->height=$request->height;
        $player->team_id = $request->team;
        $player->lang_id=$request->lang_id;
         $player->main_id = $request->main;
        $player->position_id=$request->position;
        $player->image =$path;
        $player->save();
        return redirect()->route('admin.players.index');
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
        $player = Player::find($id);
        return view('admin.players.edit',['player'=>$player]);
    }
    public function team($id)
    {
        $player = Player::find($id);
        return view('admin.teams.player_edit',['player'=>$player]);
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
        $player = Player::find($id);
        $path = "";
        if ($request->file('image')){
            $path = $request->file('image')->store('images', 'public');
        }
        $player->fio=$request->name;
        $player->region=$request->region;
        $player->player_number=$request->player_number;
        $player->birthday=$request->birthday;
        $player->weight=$request->weight;
        $player->height=$request->height;
        $player->lang_id=$request->lang_id;
        if($request->team){
            $player->team_id=$request->team;
        }

        $player->main_id = $request->main;
        $player->position_id=$request->position;
        if($path != ""){
            $player->image =$path;
        }
        else{
            $player->image=$player->image;
        }
        $player->save();
        return redirect()->route('admin.players.index');
    }

    public function playerupdate(Request $request, $id)
    {
        $player = Player::find($id);
        $path = "";
        if ($request->file('image')){
            $path = $request->file('image')->store('images', 'public');
        }
        $player->fio=$request->name;
        $player->region=$request->region;
        $player->player_number=$request->player_number;
        $player->birthday=$request->birthday;
        if($request->team){
            $player->team_id=$request->team;
        }

        $player->main_id = $request->main;
        $player->position_id=$request->position;
        if($path != ""){
            $player->image =$path;
        }
        else{
            $player->image=$player->image;
        }
        $player->save();
        return redirect()->route('admin.teams.show',['id'=>$player->team_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Player::find($id);
        $team->delete();
        return redirect()->route('admin.players.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Game;
use App\Goal;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.games.games');
    }
    public function score($id)
    {
        $game = Game::find($id);
        $hometeamgoals = count(\Illuminate\Support\Facades\DB::table('goals')->where('game_id',$game->id)->where('team_id',$game->hometeam->id)->get());
        $guestteamgoals = count(\Illuminate\Support\Facades\DB::table('goals')->where('game_id',$game->id)->where('team_id',$game->guestteam->id)->get());

        $hometeam = Team::where('id',$game->team_home)->where('league_id',$game->league_id)->first();
        $guestteam = Team::where('id',$game->team_guest)->where('league_id',$game->league_id)->first();

        if($hometeamgoals > $guestteamgoals){
            $hometeam->score += 3;
        }elseif($hometeamgoals < $guestteamgoals){
        $guestteam->score += 0;
        }else{
            $hometeam->score += 1;
            $guestteam->score += 1;
        }
        $hometeam->save();
        $guestteam->save();
        return view('admin.games.games');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $teamhome = Team::find($request->teamhome);
        $game = new Game();
        $game->team_home = $request->teamhome;
        $game->team_guest = $request->teamguest;
        $game->start_time = $request->starttime;
        $game->stadium_id = $teamhome->stadium_id;
        $game->league_id = $request->league;
        $game->group_id = $request->group;
        $game->type_id = $request->type;
        $game->is_next = 1;
        $game->save();
        return redirect()->route('admin.games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::find($id);
        return view('admin.games.show',['game'=>$game]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::find($id);
        return view('admin.games.edit',['game'=>$game]);
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
        $game = Game::find($id);
        $game->is_finish = true;
        $goal = new Goal();
        $goal->goals_number = 1;
        $goal->time = $request->time;
//        if($request->goaltype == "penalty"){
//            $goal->penalty = true;
//        }
//        if($request->goaltype == "owngoal"){
//            $goal->owngoal = true;
//        }
        $goal->game_id = $id;
        $goal->team_id = $request->team;
        if($request->player !=""){
            $goal->player_id = $request->player;
        }
        $game->is_next = 0;
       if($game->team_home == $request->team){
           $team1 = Team::find($request->team);
           $team2 = Team::find($game->team_guest);
           $team1->goals_number +=1;
           $team2->goals_reverse +=1;
           $team1->save();
           $team2->save();
       }
       if($game->team_guest == $request->team){
           $team1 = Team::find($request->team);
           $team1->goals_number +=1;
           $team1->save();
           $team2 = Team::find($game->team_home);
           $team2->goals_reverse +=1;
           $team2->save();
       }

        $goal->save();
        $game->save();
        return redirect()->route('admin.games.edit',['id'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

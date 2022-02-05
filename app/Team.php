<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Group;
use App\Stadium;
use App\Player;
use App\Goal;
use App\Game;
use App\League;
use App\Young;
use App\Match;
class Team extends Model
{
    protected $table="teams";

    public function position(){
        return $this->belongsTo(Position::class);
    }

    public function lang(){
        return $this->belongsTo(Lang::class);
    }


    public function stadium(){
        return $this->belongsTo(Stadium::class);
    }
    public function players(){
        return $this->hasMany(Player::class);
    }

    public function goals(){
        return $this->hasMany(Goal::class);
    }
    public function homegame(){
        return $this->belongsTo(Game::class,'team_home','id');
    }
    public function guestgame(){
        return $this->belongsTo(Game::class,'team_guest','id');
    }

    public  function league(){
        return $this->belongsTo(League::class);
    }
    public  function group(){
        return $this->belongsTo(Group::class);
    }
     public  function young(){
        return $this->belongsTo(Young::class);
    }

    public  function match(){
        return $this->belongsTo(Match::class);
    }




}

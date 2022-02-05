<?php

namespace App;

use App\Team;
use App\Group;
use App\Game;
use App\Match;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    public  function teams(){
        return $this->hasMany(Team::class);
    }
    public  function games(){
        return $this->hasMany(Game::class);
    }
    public  function groups(){
        return $this->hasMany(Group::class);
    }
     public  function matches(){
        return $this->hasMany(Match::class);
    }
}

<?php

namespace App;
use App\League;
use App\Game;
use App\Team;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //


    public function league(){
        return $this->belongsTo(League::class);
    }
    public function teams(){
        return $this->hasMany(Team::class);
    }
    public function games(){
        return $this->hasMany(Game::class);
    }

}

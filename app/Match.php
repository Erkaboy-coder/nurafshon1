<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Group;
use App\Stadium;
use App\Player;
use App\Goal;
use App\Game;
use App\League;
use App\Team;
use App\Lang;

class Match extends Model
{
    protected $table="matches";


    public function team(){
        return $this->belongsTo(Team::class);
    }
    public function lang(){
        return $this->belongsTo(Lang::class);
    }
      public  function league(){
        return $this->belongsTo(League::class);
    }
    


}

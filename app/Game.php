<?php

namespace App;
use App\Goal;
use App\Team;
use App\Type;
use App\Lang;

use App\League;
use Illuminate\Database\Eloquent\Model;
use App\Group;
class Game extends Model
{

    public function goals(){
        return $this->hasMany(Goal::class);
    }

    public function hometeam(){
        return $this->hasOne(Team::class,'id','team_home');
    }
    public function guestteam(){
        return $this->hasOne(Team::class,'id','team_guest');
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function group(){
        return $this->belongsTo(Group::class);
    }
    public function league(){
        return $this->belongsTo(League::class);
    }

    public function lang(){
        return $this->belongsTo(Lang::class);
    }

}

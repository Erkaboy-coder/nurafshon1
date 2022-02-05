<?php

namespace App;
use App\Player;
use App\Game;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{

    public function player(){
        return $this->belongsTo(Player::class);
    }
    public function game(){
        return $this->belongsTo(Game::class);
    }
    public function team(){
        return $this->belongsTo(Team::class);
    }
}

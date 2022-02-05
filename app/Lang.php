<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;
use App\Win;
use App\Coach;
use App\Foto;
use App\Player;
use App\Match;

class Lang extends Model
{
    protected $table="langs";

    public function news(){
        return $this->hasMany(News::class);
    }

    public function wins(){
        return $this->hasMany(Win::class);
    }

    public function coaches(){
        return $this->hasMany(Coach::class);
    }

    public function fotos(){
        return $this->hasMany(Foto::class);
    }

    public function players(){
        return $this->hasMany(Player::class);
    }
    public function matches(){
        return $this->hasMany(Match::class);
    }
}

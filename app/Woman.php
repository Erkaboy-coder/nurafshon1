<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Woman extends Model
{
    //

    public function position(){
        return $this->belongsTo(Position::class);
    }
    public function team(){
        return $this->belongsTo(Team::class);
    }
    public function main(){
        return $this->belongsTo(Main::class);
    }
}

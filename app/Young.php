<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Young extends Model
{
        public function position(){
        return $this->belongsTo(Position::class);
    }
    public function team(){
        return $this->belongsTo(Team::class);
    }
    public function goals(){
        return $this->hasMany(Goal::class);
    }
    public function main(){
        return $this->belongsTo(Main::class);
    }
    public function lang(){
        return $this->belongsTo(Lang::class);
    }
}

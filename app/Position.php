<?php

namespace App;
use App\Team;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected  $table="positions";

    public function players(){
        return $this->hasMany(Team::class);
    }
}

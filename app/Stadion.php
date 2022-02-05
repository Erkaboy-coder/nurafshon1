<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadion extends Model
{
    protected $table="stadions";

    public function lang(){
        return $this->belongsTo(Lang::class);
    }
    public function team(){
        return $this->hasOne(Team::class);
    }
}

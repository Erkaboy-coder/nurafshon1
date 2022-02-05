<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected  $table="stadions";

    public function team(){
        return $this->hasOne(Team::class);
    }
}

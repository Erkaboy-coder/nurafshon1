<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected  $fillable = ['name'];

    public function players(){
        return $this->hasMany(Player::class);
    }
}

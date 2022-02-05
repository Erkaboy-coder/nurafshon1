<?php

namespace App;
use App\Game;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';
    protected $fillable =['name'];

    public function games(){
        return $this->hasMany(Game::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lang;

class Win extends Model
{
    protected $table="wins";

    public function lang(){
        return $this->belongsTo(Lang::class);
    }
}

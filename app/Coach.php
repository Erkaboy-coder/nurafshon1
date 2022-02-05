<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lang;

class Coach extends Model
{
    protected $table="coaches";

    public function lang(){
        return $this->belongsTo(Lang::class);
    }
}

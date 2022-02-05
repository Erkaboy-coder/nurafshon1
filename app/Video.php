<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lang;


class Video extends Model
{
    protected $table="videos";

    public function lang(){
        return $this->belongsTo(Lang::class);
    }
}

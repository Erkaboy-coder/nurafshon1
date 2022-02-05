<?php

namespace App;

use App\Lang;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table="news";

    public function lang(){
        return $this->belongsTo(Lang::class);
    }
}

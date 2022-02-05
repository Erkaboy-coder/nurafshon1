<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lang;


class Foto extends Model
{
    protected $table="fotos";

    public function lang(){
        return $this->belongsTo(Lang::class);
    }
}

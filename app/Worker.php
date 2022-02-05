<?php

namespace App;

use App\LeadershipCategory;
use Illuminate\Database\Eloquent\Model;
use App\Lang;
class Worker extends Model
{
    protected  $table="workers";

    public function category(){
        return $this->belongsTo(LeadershipCategory::class);
    }

    public function lang(){
        return $this->belongsTo(Lang::class);
    }
}

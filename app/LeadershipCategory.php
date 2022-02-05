<?php

namespace App;

use App\Worker;
use Illuminate\Database\Eloquent\Model;

class LeadershipCategory extends Model
{
    protected  $table="leadership_categories";

    public function worker(){
        return $this->hasMany(Worker::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projectModel extends Model
{
    public function mytask(){
        return $this->hasMany('App\taskModel','id','task_id');
    }
}

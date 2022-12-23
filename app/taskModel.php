<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taskModel extends Model
{
    public function myuser(){
        return $this->hasMany('App\userModel','id','user_id');
    }
}

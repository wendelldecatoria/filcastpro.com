<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{    
    public function ActorSkill(){
        return $this->hasMany('App\ActorSkill');
    }
}

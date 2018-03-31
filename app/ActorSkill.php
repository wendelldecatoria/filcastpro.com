<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActorSkill extends Model
{
    protected $table = 'actor_skill';
    
    public function Actor(){
        return $this->belongsTo('App\Actor');
    }

    public function Skill(){
        return $this->belongsTo('App\Skill');
    }
}

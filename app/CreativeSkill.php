<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreativeSkill extends Model
{
    protected $table = 'creative_skill';
    
    public function Creative(){
        return $this->belongsTo('App\Creative');
    }

    public function Skill(){
        return $this->belongsTo('App\Skill');
    }
}

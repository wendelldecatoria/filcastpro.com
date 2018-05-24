<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creative extends Model
{
    public function Image(){
        return $this->hasMany('App\Image','actor_id', 'id');
    }

    public function CreativeSkill(){
        return $this->hasMany('App\CreativeSkill');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    public function WhatsUp(){
        return $this->hasMany('App\WhatsUp');
    }
}
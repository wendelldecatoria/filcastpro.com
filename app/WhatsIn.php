<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhatsIn extends Model
{
    protected $table = 'whats_in';

    public function WhatsInCategory(){
        return $this->hasMany('App\WhatsInCategory'); 
    }
}

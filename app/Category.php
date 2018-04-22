<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function WhatsInCategory(){
        return $this->hasMany('App\WhatsInCategory');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function Image(){
        return $this->hasMany('App\Image');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function Actor(){
        return $this->belongsTo('App\Actor');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhatsUp extends Model
{
    protected $table = 'whats_up';

    public function Writer(){
        return $this->belongsTo('App\Writer');
    }
}

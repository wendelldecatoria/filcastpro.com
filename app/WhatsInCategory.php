<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhatsInCategory extends Model
{
    protected $table = 'whats_in_category';
    
    public function Category(){
        return $this->belongsTo('App\Category');
    }
    public function WhatsIn(){
        return $this->belongsTo('App\WhatsIn');
    }
}

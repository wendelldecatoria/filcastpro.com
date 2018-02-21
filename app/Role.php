<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    public function RoleUser(){
        return $this->hasMany('App\RoleUser');
    }
}

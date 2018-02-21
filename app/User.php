<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];  

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        $user_id = Auth::User()->id;
        $role_id = array();
        
        // looks up role from role_user and return a boolean
        // check if user has role_id == 1 and return true
        // TODO: user might have multiple roles so find a way to fix this
        
        $roles = RoleUser::select('role_id')->where('user_id','=',$user_id)->get();
        foreach ($roles as $role) {
            array_push($role_id, $role->role_id);
        }
        if (in_array(1, $role_id)) {
            return  true;
        } else {
            return false;  
        }  
    }
    
    public function RoleUser(){
        return $this->hasMany('App\RoleUser');
    }

    public function SubscriberUser(){
        return $this->hasMany('App\SubscriberUser');
    }

     public function MallUser(){
        return $this->hasMany('App\MallUser');
    }

    public function Parent(){
        return $this->belongsTo(self::class, 'approver');
    }

    public function Children(){
        return $this->hasMany(self::class, 'approver');
    }

}

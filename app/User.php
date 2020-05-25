<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'direccion', 'telefono'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Devuelve True si el o los roles dados son del usuario,
     * Aborta la operacion si no
     * @var roles
     */
    public function authorizeRoles($roles){
        if($this->hasAnyRoles($roles)){
            return true;
        }
        abort(401, 'This action is unauthorized');
    }

    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach($roles as $role){
                return $this->hasRole($roles);
            }
        }else{
            return $this->hasRole($roles);
        }
        return false;
    }

    public function hasRole($role){
        if($this->roles->where('nombre', $role)->first()){
            return true;
        }
        return false;
    }


    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function ordenes(){
        return $this->hasMany(Orden::class);
    }

}

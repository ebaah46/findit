<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Service;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','date_of_birth','phone','type'
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

   /*
    * Many to many relationship between user and role models
    *
    *
    */
   public  function roles(){
       return $this->belongsToMany(Role::class);
   }
    /*
     * Check array of roles*/
   public function authorizeRoles($roles){
       if(is_array($roles)){
           return $this->hasAnyRole($roles) || abort(401,'This action is unauthorized');
       }
       return $this->hasRole($roles) || abort(401,'This action us unauthorized');

   }

   /*
    * Check multiple roles
    * */
   public function hasAnyRole($roles){
       return null !== $this->roles()->wherein('name',$roles)->first();
   }
    /*
     * Check one role
     * */
   public function  hasRole($role){
       return null!== $this->roles()->whereIn('name',$role)->first();
   }
   /*
    * User service relationship
   */
   public function service(){
       return $this->hasMany('App\Service');
   }
}

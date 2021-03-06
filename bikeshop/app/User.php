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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getId()
    {
      return $this->id;
    }

    public function roles()
    {
      return $this->belongsToMany('App\Models\Role');
    }

    public function hasRole($role)
    {
      if ($this->roles()->where('name', $role)->first()) {
        return true;
      }
      return false;
    }

    public function hasRoles($role1, $role2)
    {
      if ($this->roles()->where('name', $role1)->first()) {
        return true;
      }
      else if ($this->roles()->where('name', $role2)->first()) {
        return true;
      }
      return false;
    }

    public function hasAllRoles($role1, $role2, $role3)
    {
      if ($this->roles()->where('name', $role1)->first()) {
        return true;
      }
      else if ($this->roles()->where('name', $role2)->first()) {
        return true;
      }
      else if ($this->roles()->where('name', $role3)->first()) {
        return true;
      }
      return false;
    }

    public function hasAnyRoles($roles)
    {
      if($this->roles()->whereIn('name', $roles)->first())
      {
        return true;
      }
      return false;
    }
}

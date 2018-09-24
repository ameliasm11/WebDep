<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Users extends Authenticatable
{
	use AuthenticatableTrait;
	use Notifiable;

	protected $table = 'tm_user';

	protected $fillable = ['id', 'name', 'id_role', 'email', 'password'];

	protected $hidden = ['password', 'remember_token'];

	
    public function Role(){
    	return $this->hasOne('App\model\Role');
    }
}

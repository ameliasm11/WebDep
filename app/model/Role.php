<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Role extends Authenticatable
{
	use AuthenticatableTrait;
	use Notifiable;

	protected $table = 'tm_role';

	protected $fillable = [
		'id',
		'name',
		'level',
		'description',
	];

	public function users(){
		return $this->hasOne('App\model\Users');
	}
	public function accesses(){
		return $this->hasMany('App\model\Access');
	}
}

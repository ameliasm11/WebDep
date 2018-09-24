<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'tm_module';

	protected $fillable = [
		'id',
		'name',
		'description',
    'icon',
		'order',
	];
    public function Access()  {
    	return $this->belongsToMany('App\model\Access');
    }
    public function Menus()  {
    	return $this->HasMany('App\model\Menu');
    }
}

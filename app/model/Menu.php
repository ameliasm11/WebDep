<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'tm_menu';

	protected $fillable = [
		'id',
		'name',
		'id_module',
		'url',
	];
    public function Access()  {
    	return $this->belongsToMany('App\model\Access');
    }
    public function Modules()  {
    	return $this->belongsTo('App\model\Module');
    }
}

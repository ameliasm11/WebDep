<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
  protected $table = 'tm_access';

	protected $fillable = [
		'id',
		'role_id',
		'module_id',
		'id_menu',
		'do_insert',
		'do_update',
	];

    public function Role(){
    	return $this->belongsTo('App\model\Role');
    }
    public function Modules(){
    	return $this->belongsTo('App\model\Module');
    }
    public function Menus(){
    	return $this->belongsTo('App\model\Menu');
    }
}

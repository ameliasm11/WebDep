<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  protected $table = 'tm_payment_type';

  protected $fillable = [
    'id',
    'nama',
  ];
  public function method(){
		return $this->hasMany('App\model\Method');
	}
}

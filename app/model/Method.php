<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
  protected $table = 'tm_payment_method';

  protected $fillable = [
    'id',
    'type_id',
    'nama',
  ];
  public function type(){
    return $this->belongsTo('App\model\Type');
  }
}

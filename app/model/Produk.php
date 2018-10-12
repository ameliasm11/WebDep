<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
  protected $table = 'tm_product';

  protected $fillable = [
    'id',
    'name',
    'producat_id',
    'url',
    'status',
  ];
  public function kategory(){
    return $this->belongsTo('App\model\Kategori');
  }
  public function artnercompany(){
    return $this->hasMany('App\model\Partnercompany');
  }
}

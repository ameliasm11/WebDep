<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
  protected $table = 'tm_category_product';

  protected $fillable = [
    'id',
    'name',
    'description',
  ];
  public function produk(){
    return $this->hasMany('App\model\Produk');
  }
  public function partnercompany(){
    return $this->hasMany('App\model\Partnercompany');
  }
}

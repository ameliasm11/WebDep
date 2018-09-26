<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Kategori_Produk extends Model
{
  protected $table = 'tm_category_product';

  protected $fillable = [
    'id',
    'name',
    'description',
  ];
  public function Produk()  {
    return $this->HasMany('App\model\Produk');
  }
}

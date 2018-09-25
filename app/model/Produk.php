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
    'location',
    'idr',
    'url',
    'status',
  ];
  public function Kategori_Produk()  {
    return $this->belongsTo('App\model\Kategori_Produk');
  }
}
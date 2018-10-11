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
  public function Kategori()  {
    return $this->belongsTo('App\model\Kategori');
  }
}

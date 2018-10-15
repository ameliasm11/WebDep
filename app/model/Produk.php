<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
  protected $table = 'tm_product';

  protected $fillable = [
    'id',
    'name',
    'producat_id', // Nama table.id
    'url',
    'status',
  ];
  public function kategoriproduk(){
    // belongsTo("NAMA MODEL/TABLE TUJUAN", "NAMA FIELD ID DI TABLE PEMANGGIL", "NAMA ID DI MODEL TUJUAN")
    return $this->belongsTo('App\model\KategoriProduk', 'producat_id', 'id');
  }
  public function partnercompany(){
    return $this->hasMany('App\model\Partnercompany');
  }
}

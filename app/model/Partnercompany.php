<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Partnercompany extends Model
{
  protected $table = 'tm_partner_company';

  protected $fillable = [
    'id',
    'nama',
    'category_id',
    'produk_id',
  ];
  public function KategoriProduk(){
    return $this->belongsTo('App\model\KategoriProduk', 'category_id', 'id');
  }
  public function produk(){
    return $this->belongsTo('App\model\Produk');
  }
  public function tempat(){
    return $this->hasMany('App\model\Tempat');
  }
}

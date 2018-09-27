<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Partner_company extends Model
{
  protected $table = 'tm_partner_company';

  protected $fillable = [
    'id',
    'nama',
    'produk_category',
    'produk',
  ];
}

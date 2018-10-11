<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
  protected $table = 'tm_harga';

  protected $fillable = [
    'id',
    'harga',
  ];
    public function Jadwal()  {
      return $this->HasMany('App\model\Jadwal');
    }
}

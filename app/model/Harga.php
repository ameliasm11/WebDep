<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
  protected $table = 'tm_harga';

  protected $fillable = [
    'id',
    'jadwal_id',
    'harga',
  ];
    public function Jadwal()  {
      return $this->belongsTo('App\model\Jadwal');
    }
}

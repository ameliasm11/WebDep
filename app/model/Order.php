<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table = 'tm_order';

  protected $fillable = [
    'id',
    'jadwal_id',
    'nama',
    'tanggal',
    'jam_pesan',
    'status',
    'no_hp'.
  ];
    public function Jadwal()  {
      return $this->HasMany('App\model\Jadwal');
    }
}

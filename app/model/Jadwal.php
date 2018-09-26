<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
  protected $table = 'tm_jadwal';

  protected $fillable = [
    'id',
    'lapangan_id',
    'tanggal',
    'jam',
    'status',
  ];
    public function Lapangan()  {
      return $this->belongsTo('App\model\Lapangan');
    }
    public function Harga() {
      return $this->HasMany('App\model\Harga');
    }
    public function Order() {
      return $this->belongsTo('App\model\Order');
    }
}

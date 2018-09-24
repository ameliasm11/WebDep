<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
  protected $table = 'tm_lapangan';

  protected $fillable = [
    'id',
    'ket_lapangan',
    'tempat_id',
  ];
    public function Tempat()  {
      return $this->belongsTo('App\model\Tempat');
    }
    public function Jadwal() {
      return $this->HasMany('App\model\Jadwal');
    }
}

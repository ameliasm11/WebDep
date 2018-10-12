<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
  protected $table = 'tm_harga';

  protected $fillable = [
    'id',
    'tempat_id',
    'lapangan_id',
    'jam_id',
    'harga',
  ];
    public function Jadwal()  {
      return $this->belongsTo('App\model\Jadwal');
    }

    public function Tempat(){
      return $this->belongsTo('App\model\Tempat');
    }

    public function Lapangan(){
      return $this->belongsTo('App\model\Lapangan');
    }
}

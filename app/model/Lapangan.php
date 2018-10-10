<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
  protected $table = 'tm_lapangan';

  protected $fillable = [
    'id',
    'nama',
    'ket',
    'tempat_id',
    'gambar',

  ];
    public function Tempat()  {
      return $this->belongsTo('App\model\Tempat');
    }

    // public function Tempat(){
    //   return $this->belongsTo('Tempat', 'tempat_id');
    // }

    public function Jadwal() {
      return $this->HasMany('App\model\Jadwal');
    }
}

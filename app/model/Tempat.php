<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
  protected $table = 'tm_tempat';

  protected $fillable = [
    'id',
    'nama',
    'alamat',
    'gambar',
    'jam_buka',
    'jam_tutup',
    'partner_id',
    'deskripsi',
  ];
  public function Lapangan()  {
    return $this->HasMany('App\model\Lapangan');
  }
  public function Jadwal()  {
    return $this->HasMany('App\model\Jadwal');
  }
  public function partner(){
    return $this->belongsTo('App\model\Partnercompany');
  }
  public function Harga() {
    return $this->hasOne('App\model\Harga');
  }
}

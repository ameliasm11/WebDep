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
    return $this->hasMany('App\model\Jadwal');
  }
    // belongsTo("NAMA MODEL/TABLE TUJUAN", "NAMA FIELD ID DI TABLE PEMANGGIL", "NAMA ID DI MODEL TUJUAN")
  public function Partnercompany(){
    return $this->belongsTo('App\model\Partnercompany', 'partner_id', 'id');
  }
  public function Harga() {
    return $this->hasOne('App\model\Harga');
  }
}

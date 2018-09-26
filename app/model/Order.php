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
    'no_hp',
    'status',
	];
    public function Jadwal()  {
    	return $this->HasOne('App\model\Jadwal');
    }
}

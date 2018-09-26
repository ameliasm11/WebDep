<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table = 'tm_order';

  protected $fillable = [
		'id',
		'nama',
		'no_hp',
    'tempat',
		'lapangan',
    'tanggal',
    'jam',
    'harga',
    'status',
	];
}

<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Payment_method extends Model
{
  protected $table = 'tm_payment_method';

  protected $fillable = [
    'id',
    'nama',
  ];
}

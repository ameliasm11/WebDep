<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Payment_type extends Model
{
  protected $table = 'tm_payment_type';

  protected $fillable = [
    'id',
    'nama',
  ];
}

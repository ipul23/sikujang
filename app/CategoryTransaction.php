<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryTransaction extends Model
{
  protected $primaryKey = 'kode_transaksi';
  protected $fillable = ['nama_transaksi'];
}

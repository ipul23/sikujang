<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan_produk extends Model
{
    protected $primaryKey = 'id_penjualan';
    protected $fillable = ['id_produk',
    'jumlah',
    'id_user',
    'harga',
    'tanggal',
    'bulan',
    'tahun'
  ];
}

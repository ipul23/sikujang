<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  protected $primaryKey = 'id_transaksi';
  protected $fillable = ['id_contact', 'kode_transaksi', 'kredit', 'debit', 'nilai', 'referensi', 'keterangan', 'tanggal', 'bulan', 'tahun'];
}

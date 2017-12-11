<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cabang_akun extends Model
{
  protected $primaryKey = 'id_cabang';
  protected $fillable = ['id_akun', 'kode', 'nama', 'jumlah'];
}

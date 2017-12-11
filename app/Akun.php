<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
  protected $primaryKey = 'id_akun';
  protected $fillable = ['id_user', 'nama'];
}

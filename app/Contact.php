<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $primaryKey = 'id_contact';
  protected $fillable = ['nama', 'telepon', 'email', 'perusahaan', 'alamat'];
}

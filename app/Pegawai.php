<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable = ['idpegawai', 'nama', 'jabatan', 'kontribusi', 'gaji'];
    protected $primaryKey = 'idpegawai';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    protected $table = 'cabang';
    protected $fillable = ['idcabang', 'nama', 'kota', 'nomortelepon'];
    protected $primaryKey = 'idcabang';
}

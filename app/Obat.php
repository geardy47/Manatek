<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat';
    protected $fillable = ['kodeobat', 'nama', 'jenis', 'harga', 'stok'];
    protected $primaryKey = 'kodeobat';
}

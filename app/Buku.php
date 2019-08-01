<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['judul','nisn','penulis',
        'tahun','stok','harga_pokok','harga_jual','ppn','diskon'];
    public $timestamps = true;
    public function pasok()
    {
        return $this->hasMany('App\Pasok','id_pasok');
    }
    public function penjual()
    {
        return $this->hasMany('App\Penjualan','id_penjualan');
    }
}

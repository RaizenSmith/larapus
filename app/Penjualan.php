<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = ['id_buku','id_kasir','jumlah','total','tanggal'];
    protected $timestamps = true;

    public function buku(){
        return $this->belongsTo('App\Buku','id_buku');
    }
    public function kasir(){
        return $this->belongsTo('App\Kasir','id_kasir');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $fillable = 
    ['id_petugas','id_peminjam','tgl_kembali','tanggal_akhir','masuk','keluar'];
    public $timestamps = true;

    public function petugas()
    {
        return $this->belongsTo('App\Petugas', 'id_petugas');
    }
    public function peminjam()
    {
        return $this->belongsTo('App\Peminjam', 'id_peminjam');
    }
}
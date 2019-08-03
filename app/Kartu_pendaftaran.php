<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kartu_pendaftaran extends Model
{
    protected $fillable = 
    ['id_petugas','id_peminjam','tanggal_pembuatan','tanggal_akhir','status_aktif'];
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
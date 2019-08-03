<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    protected $fillable = ['nama','alamat','telp','foto',];
    public $timestamps = true;

    public function peminjaman()
    {
        return $this->hasMany('App\Peminjaman','id_peminjaman');
    }
    public function kartu_pendaftaran()
    {
        return $this->hasMany('App\Kartu_pendaftaran','id_pendaftaran');
    }
}

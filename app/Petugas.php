<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $fillable = ['nama'];
    public $timestamps = true;

    public function peminjaman()
    {
        return $this->hasMany('App\Peminjaman','id_peminjaman');
    }
    public function kartu_pendaftaran()
    {
        return $this->hasMany('App\Kartu_pendaftaran','id_kartu_pendaftaran');
    }
}
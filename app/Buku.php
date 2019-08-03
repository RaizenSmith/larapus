<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = 
    ['id_kategori','id_penerbit','judul','jumlah_halaman','deskripsi','nama_pengarang','tahun_terbit'];
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'id_kategori');
    }
    public function penerbit()
    {
        return $this->belongsTo('App\Penerbit', 'id_penerbit');
    }
}

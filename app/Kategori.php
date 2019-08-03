<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama_kategori'];
    public $timestamps = true;

    public function buku()
    {
        return $this->hasMany('App\Buku','id_kategori');
    }

}

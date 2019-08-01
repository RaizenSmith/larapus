<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    protected $fillable = ['nama','alamat','telepon','status','username','password','akses'];
    protected $timestamps = true;

    protected function penjualan(){
        return $this->hasMany('App\Penjualan','id_penjualan');
    }
}

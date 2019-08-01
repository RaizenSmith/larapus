<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $fillable = ['nama_distributor','alamat','alamat'];
    protected $timestamps = true;

    protected function pasok()
    {
        return $this->hasMany('App\Pasok','id_pasok');
    }
}

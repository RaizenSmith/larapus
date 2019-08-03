<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $fillable = ['nama','alamat','delete'];
    public $timestamps = true;

    public function buku()
    {
        return $this->hasMany('App\Buku','id_penerbit');
    }

}
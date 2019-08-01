<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasok extends Model
{
    protected $fillable = ['id_distributor','id_buku','jumlah','tanggal'];
    protected $timestamps = true;

    public function distributor(){
        return $this->belongsTo('App\Distributor','id_distributor');
    }
    public function buku(){
        return $this->belongsTo('App\Buku','id_buku');
    }
}

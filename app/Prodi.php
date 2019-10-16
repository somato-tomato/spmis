<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $fillable = [
        'namaProdi', 'kodeProdi', 'idFakultas'
    ];

    public function Fakultas(){
        return $this->belongsTo('App\Fakultas');
    }


}

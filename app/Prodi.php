<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $fillable = [
        'nama_prodi', 'kode_prodi', 'idFakultas'
    ];

    public function Fakultas(){
        return $this->belongsTo('App\Fakultas');
    }


}

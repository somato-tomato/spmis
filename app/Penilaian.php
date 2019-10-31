<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $fillable = [
        'idIsi', 'angka', 'keterangan'
    ];

    public function Isi(){
        return $this->belongsTo('App\Isi');
    }
}

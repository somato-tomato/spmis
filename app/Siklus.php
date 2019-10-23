<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  Siklus extends Model
{
    protected $fillable =[
        'nomor', 'nama', 'tahun', 'sk', 'tanggal',
    ];

    public function Isi(){
        return $this->hasMany('App\Isi', 'id', 'idSiklus');
    }
}

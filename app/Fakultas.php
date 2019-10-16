<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Prodi;

class Fakultas extends Model
{
    protected $fillable =[
        'namaFakultas'
    ];

    public function Prodi(){
        return $this->hasMany('App\Prodi');
    }
}

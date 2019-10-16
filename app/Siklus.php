<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siklus extends Model
{
    protected $fillable =[
        'nomor', 'nama', 'tahun', 'sk', 'tanggal',
    ];
}

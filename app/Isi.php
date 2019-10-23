<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Isi extends Model
{
    protected $fillable = [
      'idSiklus', 'judulIsi', 'keterangan', 'isi'
    ];

    public function Siklus(){
        return $this->belongsTo('App\Siklus', 'idSiklus', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    protected $fillable = [
        'namaLembaga', 'alamatLembaga', 'kotkabLembaga', 'notelpLembaga'
    ];
}

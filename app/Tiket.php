<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Tiket extends Eloquent
{

    protected $connection = 'mongodb'; //connection menggunakan mongodb jangan di ubah
    protected $collection = 'Tiket';//object di dalam database berupa user atau ini sama saja dengan table jika menggunakan sql
    protected $fillable = [
        "gambar"
    ];
    protected $gridFs=[
        "gambar"
    ];
    //
}

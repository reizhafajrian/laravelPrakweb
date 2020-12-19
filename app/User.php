<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
class User extends Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    protected $connection = 'mongodb'; //connection menggunakan mongodb jangan di ubah
    protected $collection = 'User';//object di dalam database berupa user atau ini sama saja dengan table jika menggunakan sql
    //field database mongodb
    protected $fillable = [
        'name', 'email','password','accountype','agreement'
       ];
}
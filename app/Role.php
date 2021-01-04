<?php

namespace App;
 use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;

class Role extends Eloquent
{
    protected $connection="mongodb";
    protected $collection="roles";
   
    protected $fillable = [
        'name'
    ];
   
    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
}

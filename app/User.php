<?php

namespace App;

use App\Http\Controllers\BerandaController;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\Authenticatable;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;
class User extends Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    protected $collection="users";
    protected $fillable = [
        'name', 'email','password','accountype','agreement'
       ];
       public function role() {
        return $this->belongsTo(Role::class);
    }
    public function hasPermission() {
        // dd($this->accountype);
        
        return $this->accountype=="buyer"?:false;
    }

}
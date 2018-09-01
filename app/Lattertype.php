<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Latter;

class Lattertype extends Model
{
    //
     public function latters()
   {
   	return $this->hasMany('App\Latter', 'id');
   }
}

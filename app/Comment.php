<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Latter;

class Comment extends Model
{
    //
     public function latter()
   {

   // return $this->belongsToMany('App\Employee');
    return $this->belongsTo('App\Latter');

   }
}

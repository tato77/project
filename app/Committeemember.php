<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Committee;
use App\User;
class Committeemember extends Model
{
    //
    public function committee() 
   { 
   	return $this->belongsTo('App\Committee', 'id');
   }
   public function user() 
   {
   	return $this->belongsTo('App\User'); 
   } 
}
 
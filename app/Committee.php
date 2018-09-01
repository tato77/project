<?php

namespace App;
use App\Committeemember;



use Illuminate\Database\Eloquent\Model;

class Committee extends Model 
{
    //
     public function committeemembers()
   {
   	 return $this->belongsTo('App\Committeemember', 'id'); 
   }
   
   //public function employees()
   //{
   //	 $this->hasMany(Employees::class);
  // }
}

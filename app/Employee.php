<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Dept;
use App\Grad;
use App\Job;
use App\Latter;

class Employee extends Model
{ 
    //
  

  public function dept() 
   {
   	return $this->belongsTo('App\Dept', 'id');
   } 

   public function grad() 
   {
    return $this->belongsTo('App\Grad', 'id');
   }

   public function job()
   {
   	return $this->belongsTo('App\Job', 'id');
   }
   public function latters()
   {
   	return $this->belongsToMany('App\Latter');
   }
}

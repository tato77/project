<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Grad extends Model
{
    //

     public function employees()
   {
   	return $this->hasMany('App\Employee', 'id');
   }
  


}

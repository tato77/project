<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Latter;


class Dept extends Model
{
    //belongsTo
    public $fillable = ['name','type','Email','phone'];

    public function users()
   {
   	return $this->hasMany('App\Employee', 'id'); 
   	
   }
    public function latters()

 {
  return $this->hasMany('App\Latter');
 }
  
}

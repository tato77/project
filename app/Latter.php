<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lattertype;
use App\User;
use App\Comment;
use App\Dept;
 
class Latter extends Model
{ 
    
    public $fillable = ['type','user_id','reciver_id','sender','dept_id','title','body','status','filename'];

    public function lattertype()

   {
    return $this->belongsTo('App\Lattertype', 'type');
   }
   public function dept()
 
   {
    return $this->belongsTo('App\dept');
   }
    public function users() 
   {
    return $this->belongsToMany('App\User');
   }
    public function comments()
   { 
    return $this->hasMany('App\Comment');
   }
   public function getBodyAttribute($body)
    { 
      return strip_tags($body); 

    }
}

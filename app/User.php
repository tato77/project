<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Dept;
use App\Grad;
use App\Job;
use App\Latter;
use App\Committeemembers;
use App\Committee;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','user_type', 'email', 'password','confirm_password','gender','phone','state','city','unit','home_no','dept_id','Qualification','grad_id','job_id','image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
                          protected $hidden = [
                              'password', 'remember_token',
                          ];

                          public function dept() 
                         {
                          return $this->belongsTo('App\Dept');
                         } 
 
                         public function grad()
                         {
                          return $this->belongsTo('App\Grad'); 
                         } 

                         public function job()
                         {
                          return $this->belongsTo('App\Job');
                         }
                         public function latters()
                         {
                          return $this->hasMany('App\Latter');
                         }

                         public function committeemember()
                         {
                          return $this->belongsTo('App\Committeemember');
                         }
                          public function committee()
                          { 

                          return $this->hasMany('App\Committee');

                          }
                         

}

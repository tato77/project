<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 
use App\Dept;

class ReportConttroller extends Controller
{
    //
     //
     public function report()
    {
        
      $depts = Dept::all();
      return view ('latters.reports')->withDepts($depts);
        
    }
     public function ureport()
    {
        
      $users = User::all();
      return view ('latters.ureports')->withUsers($users);
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Latter;


class PagesController extends Controller
{
    //
    
    public function home() {

    $latters = Latter::orderBY('id', 'desc')->limit(4)->get();
    return view('pages.welcome')->withLatters($latters);

    }

    public function contact(){
    
    return view('pages.contact');
    }

    public function about(){
    
    return view('pages.about');
    }
}

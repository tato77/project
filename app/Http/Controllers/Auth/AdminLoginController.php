<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    //
    
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showLoginform()
    {
    	return view ('auth.admin-login');
    }

    public function login(Request $request)
    {
    	//validate the form data
    	$this->validate($request,[
         'email' => 'required|email',
         'password' => 'required|min:6',
    	]);
          //attemp to log the user
    	          
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        	//if successful, then redirect to thier indended location
        	return redirect()->intended(route('admin.dashboard'));
        }
        //if unsucessful, then redirect back to the login with form data
          return redirect()->back()->withInput($request->only('email', 'remember'));

    }
 

  //desid what page when they logout as admin
  public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }


}

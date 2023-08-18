<?php

namespace App\Http\Controllers\authentications;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LoginBasic extends Controller
{
 public function index()
 { 
  
  return view('content.authentications.auth-login-basic');
  
 }
 public function authenticate(Request $request)
    {
     /*$this->validate($request, [
        'email'           => 'required|max:255|email',
        'password'           => 'required|confirmed',
    ]);*/
     // dd($request->input('email'));
    $users=DB::select('select email,password from users where email="'.$request->email.'"');
    if(count($users) > 0) {
      $currentusers=$users[0];
      if($request->password==$currentusers->password)
      {
        $request->session()->regenerate();
        return redirect()->route('dashboard-analytics')
            ->withSuccess('You have successfully logged in!');
      }
    }
    
   
  return back()->withErrors([  'email' => 'Your provided credentials do not match in our records.',
   ])->onlyInput('email');
    dd($users);
        
      }   
}

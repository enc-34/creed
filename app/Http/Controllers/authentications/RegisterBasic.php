<?php

namespace App\Http\Controllers\authentications;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterBasic extends Controller
{
  public function index()
  {
    return view('content.authentications.auth-register-basic');
  }
  public function store(Request $request)
 
  {  
    
    $post = User::create([
      'name'=> $request->input('username'),
      'email'=> $request->input('email'),
      'password'=> $request->input('password'),
      'slug'=> \Str::slug($request->input('email'))
    ]); 
    $request->session()->regenerate();
        return redirect()->route('dashboard-analytics')
        ->withSuccess('You have successfully registered & logged in!');
    
  }
}

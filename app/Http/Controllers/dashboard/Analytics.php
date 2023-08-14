<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Analytics extends Controller
{
  public function index(Request $request)
  {
    //dd($request->session()->has('currentUsersAccount'));
    if ($request->session()->has('currentUsersAccount')) {
      // The key exists in the session.
      if ($request->session()->has('currentUser')) {
        // The key exists in the session.
        $currentUsersAccount = session('currentUsersAccount');
         $currentUser = session('currentUser');
      }
     }
    
    //dd($currentUser);
   // $firstName=$currentUser[0]->firstName;
    //dd($currentUser);
    return view('content.dashboard.dashboards-analytics',['currentUsersAccount'=>$currentUsersAccount],['currentUser'=>$currentUser]);
  }
  public function logout(Request $request)
  {
    // To determine if a value exists in the session, even if its value is null:
    if ($request->session()->has('currentUsersAccount')) {        // The value exists in the session.
        // Remove data from the session using the forget function
      $request->session()->forget('currentUsersAccount');
      $request->session()->forget('currentUser');
    }
    return view('content.authentications.auth-login-basic');
  }
}

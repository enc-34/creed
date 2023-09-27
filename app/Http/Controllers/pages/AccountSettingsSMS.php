<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountSettingsSMS extends Controller
{
  public function index(Request $request)
  {
    if ($request->session()->has('currentUsersAccount')) {
      // The key exists in the session.
      if ($request->session()->has('currentUser')) {
        // The key exists in the session.
        $currentUsersAccount = session('currentUsersAccount');
         $currentUser = session('currentUser');
      }
     }else{
      return view('content.authentications.auth-login-basic');
     }
    return view('content.pages.pages-account-settings-SMS')->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
  }
}

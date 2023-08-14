<?php

namespace App\Http\Controllers\form_validation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Validation extends Controller
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
     }
    return view('content.form-validation.form-validation')->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
  }
}

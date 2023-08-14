<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ecommerce extends Controller
{
    public function index(Request $request){
      if ($request->session()->has('currentUsersAccount')) {
        // The key exists in the session.
        if ($request->session()->has('currentUser')) {
          // The key exists in the session.
          $currentUsersAccount = session('currentUsersAccount');
           $currentUser = session('currentUser');
        }
       }
      return view('content.dashboard.dashboards-ecommerce')->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
    }
}

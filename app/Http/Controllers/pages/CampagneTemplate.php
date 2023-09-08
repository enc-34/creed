<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\campaign;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CampagneTemplate extends Controller
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
    return view('content.pages.pages-campagne-template')->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
  }
  public function campagneTemplateOne(Request $request)
  {
    if ($request->session()->has('currentUsersAccount')) {
      // The key exists in the session.
      if ($request->session()->has('currentUser')) {
        // The key exists in the session.
        $currentUsersAccount = session('currentUsersAccount');
         $currentUser = session('currentUser');
      }
     }
    return view('content.pages.pages-campagne-template-one')->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
  }
  public function postCampagneTemplateOne()
  {

  }
  public function campagneTemplateTwo(Request $request)
  {
    if ($request->session()->has('currentUsersAccount')) {
      // The key exists in the session.
      if ($request->session()->has('currentUser')) {
        // The key exists in the session.
        $currentUsersAccount = session('currentUsersAccount');
         $currentUser = session('currentUser');
      }
     }
    return view('content.pages.pages-campagne-template-two')->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
  }
  public function postCampagneTemplateTwo()
  {

  }
  public function campagneTemplateThree(Request $request)
  {
    if ($request->session()->has('currentUsersAccount')) {
      // The key exists in the session.
      if ($request->session()->has('currentUser')) {
        // The key exists in the session.
        $currentUsersAccount = session('currentUsersAccount');
         $currentUser = session('currentUser');
      }
     }
    return view('content.pages.pages-campagne-template-three')->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
  }
  public function postCampagneTemplateThree()
  {

  }
}

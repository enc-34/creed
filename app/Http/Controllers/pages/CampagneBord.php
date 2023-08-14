<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\campaign;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampagneBord extends Controller
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

    $campaigns = DB::select('select *from campaigns');
    $user1s = DB::select('select *from user1s');
    return view('content.pages.pages-campagne-bord')->with('campaigns',$campaigns)->with('user1s',$user1s)->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
  }
  public function store(Request $request)
  {
    $campaign = campaign::create([
      'planning' =>new DateTime(),
      'campaignContenu' =>$request->input('contenue'),
      'compaignObjective' =>$request-> input('objectif'),
      'userList'=>$request->input('userList'),
      'campaignName'=>$request->input('campaignName'),
     
    ]);
    $iduser=$request->input('select');
    $campaign->user1s()->attach($iduser);
      
  // Pour terminer, on affiche "Bonjour, Homer !";
  return back()->with('success', 'Les données ont été enregistrées avec succès.');


  }
}

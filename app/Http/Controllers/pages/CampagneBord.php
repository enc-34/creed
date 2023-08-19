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
<<<<<<< HEAD
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
    $listContactsBlogs = DB::select ('select *from list_contact_blogs');
    return view('content.pages.pages-campagne-bord')->with('campaigns',$campaigns)->with('user1s',$user1s)->with('listContactBlogs',$listContactsBlogs)->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
  }
  public function store(Request $request)
  {

    $request->validate([
      'planning' => ['required'],
      'contenue' => ['required'],
      'objectif' => ['required'],
      'userList' => ['required'],
      'campaignName' => ['required'],
  ]);
    $campaign = campaign::create([
      'planning' =>new DateTime(),
      'campaignContenu' =>$request->input('contenue'),
      'compaignObjective' =>$request-> input('objectif'),
      'userList'=>$request->input('userList'),
      'campaignName'=>$request->input('campaignName'),
     
    ]);

    $idlist=$request->input('userList');
    $campaign->listcontactblogs()->attach($idlist);
    $currentUser = session('currentUser');
    $iduser=$currentUser->id;
   // $campaign->user1s()->attach($iduser);
=======

    $campaigns = DB::select('select *from campaigns');
    return view('content.pages.pages-campagne-bord',['campaigns'=>$campaigns]);
  }
  public function store(Request $request)
  {
    $post = campaign::create([
      'planning' =>new DateTime(),
      'campaignContenu' =>$request->input('contenue'),
      'compaignObjective' =>$request-> input('objectif'),
      'contactList'=>$request->input('contactList'),
      'campaignName'=>$request->input('campaignName'),
     
    ]);
>>>>>>> 7605ca9b460b031e704798c1c8ca0f5d1c4f3359
      
  // Pour terminer, on affiche "Bonjour, Homer !";
  return back()->with('success', 'Les données ont été enregistrées avec succès.');


  }
}

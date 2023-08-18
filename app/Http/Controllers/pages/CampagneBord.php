<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\campaign;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampagneBord extends Controller
{
  public function index()
  {

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
      
  // Pour terminer, on affiche "Bonjour, Homer !";
  return back()->with('success', 'Les données ont été enregistrées avec succès.');


  }
}

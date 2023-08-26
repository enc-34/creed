<?php

namespace App\Http\Controllers\pages;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\campaign;
use App\Models\contact;
use DateTime;

class CampagneWhatsapp extends Controller
{
  public function index(Request $request)
  {
    if ($request->session()->has('currentUsersAccount')) {
      // The key exists in the session.
      if ($request->session()->has('currentUser')) {
        // The key exists in the session.
        $currentUsersAccount = session('currentUsersAccount');
        $currentUser = session('currentUser');


        $url = "https://graph.facebook.com/v17.0/115801141548544/message_templates?fields=name,status&limit=3";

        $headers = ["Authorization" => "Bearer EAAJHMOd6SJcBOZCLThZBQe3ZCtsccpZC2ssLNa53mUvrw8rQ5jKwWZCq6bLh9EE5CeGAdUYdlC9wh8NTE1PGvNOZAmobQBq9fUdmtzecSNAm85slallOZBCfdztZCxZAtZBmczZA4plTgOclSkMa46PeZCrQKxTDnJ6MV1Dt8TC79emH2bMNjvHu4tHJILl4REg7nyc7KCYSrA0dKHKFIts7uAgZD"
      ,  "content-type"=> "application/json",
                    ];

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', $url, ["headers" => $headers]);


        $data = json_decode($response->getBody(), true);
        Log::Info($data);
      }
    }
    $listContactsBlogs = DB::select ('select *from list_contact_blogs');

    return view('content.pages.pages-campagne-whatsapp')->with('currentUsersAccount',$currentUsersAccount)->with('listContactBlogs',$listContactsBlogs)->with('currentUser',$currentUser)->with('whatsappBusinessTemplate', $data['data']);  }


    public function sendMessageWhatsapp(Request $request)
    {

     /*  $request->validate([
        'planning' => ['required'],
        'contenue' => ['required'],
        'objectif' => ['required'],
        'userList' => ['required'],
        'campaignName' => ['required'],
      ]); */
      //dd($request);
      $contactArray=["237695485857","237690861311"];
      $headers = ["Authorization" => "Bearer EAAJHMOd6SJcBOZCLThZBQe3ZCtsccpZC2ssLNa53mUvrw8rQ5jKwWZCq6bLh9EE5CeGAdUYdlC9wh8NTE1PGvNOZAmobQBq9fUdmtzecSNAm85slallOZBCfdztZCxZAtZBmczZA4plTgOclSkMa46PeZCrQKxTDnJ6MV1Dt8TC79emH2bMNjvHu4tHJILl4REg7nyc7KCYSrA0dKHKFIts7uAgZD" ];
      $client = new \GuzzleHttp\Client();
      $url = "https://graph.facebook.com/v17.0/109528645513854/messages" ;

       foreach($contactArray as $contact){
        $params = [
          "messaging_product" => "whatsapp",
          "to" => $contact,
          "type" => "template",
          "template" => [
          "name" =>$request->input('selectTemplate'),
            "language" => [
                "code" => "en_US",
              ]
            ]
        ];


        $response = $client->request('POST', $url, ["headers" => $headers, "json" => $params]);
        //dd($response);
       }

      $data = json_decode($response->getBody(), true);
      Log::Info($data);
      $campaign = campaign::create([
        'planning' =>new DateTime(),
        'campaignContenu' =>$request->input('contenue'),
        'compaignObjective' =>$request-> input('objectif'),
        'userList'=>$request->input('selectListContact'),
        'campaignName'=>$request->input('campaignName'),
        'template'=>$request->input('selectTemplate'),
      ]);

      $idlist=$request->input('selectListContact');
      $campaign->listcontactblogs()->attach($idlist);

      return back()->with('success', 'Les données ont été enregistrées avec succès.');
    }


  }


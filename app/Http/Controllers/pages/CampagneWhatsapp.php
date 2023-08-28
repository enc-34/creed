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

        $headers = ["Authorization" => "Bearer EAAJHMOd6SJcBO9uVafyTgO30v2tZBrYG7JZAksJmng1Ef2xy9q5G56ERJicAtpIDjFfsHCAKU0nhiz3Is5kB2mZCoULPRZCb9sODio2Jy0scgWlisxK61jzZCNJYbkYrOAkkD9a90ZBmJAFZBjYI2EnGUAQkxdXeEreYlsLSQa67TWFsWZAdSvBW3vrJ06BLC97RE2v7yDZA83uoouVSkErAZD"
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
      $contactArray=["237695485857","237690861311","237696756885"];
      $headers = ["Authorization" => "Bearer EAAJHMOd6SJcBO4oZAD4fKnOk3yYr9WlJPiX2bXRKvL3ct8vRUAZA5EIbFD0aCmakw6uaGev8wqXHhdOQOLPgBQnpRo8nzf25HGXZAaRfkdxftilLElZA7NyJDudwm6KR6D9SH7B4vBEnkI1mBJ4seDM2f54XyRsvl3dvCKaP8TM9RSZAEUqwTqnQjkCODJIglPnpd6DtyU8ON2FzLez4ZD" ];
      $client = new \GuzzleHttp\Client();
      $url = "https://graph.facebook.com/v17.0/109528645513854/messages" ;

      $selectListContact=$request->get('selectListContact');
     // $selectListContact= implode(',', $selectListContact);
     $listContactsFull =[];
     foreach($selectListContact as $itemList){
             $listContacts = DB::select ('select *from contacts as c, contact_list_contact_blog as clcb where c.id=clcb.contact_id and clcb.list_contact_blog_id='.$itemList);
             $listContactsFull = array_merge($listContactsFull,$listContacts);
     }

      //dd($listContactsFull);
       foreach($listContactsFull as $contact){
        $params = [
          "messaging_product" => "whatsapp",
          "to" => $contact->whatsapp,
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
        'campaignName'=>$request->input('campaignName'),
        'template'=>$request->input('selectTemplate'),
      ]);
      foreach($selectListContact as $itemList){
        $campaign->listcontactblogs()->attach($itemList);
      }
     

      return back()->with('success', 'Les données ont été enregistrées avec succès.');
    }


  }


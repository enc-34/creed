<?php

namespace App\Http\Controllers\pages;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CampagneMessage extends Controller
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
     //$this->sendWhatsappMultiMessage( $request);
    return view('content.pages.pages-campagne-message')->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
  }

 /* public function sendWhatsappOneMessage(Request $request)
  {
      $url = "https://graph.facebook.com/v17.0/109528645513854/messages" ;
     $params = [  "messaging_product" => "whatsapp",
         "to" => "237695485857","type" => "template",
        "template" => [
          "name" => "hello_world",
            "language" => [
                "code" => "en_US",
              ]
            ]
    ];
    $headers = ["Authorization" => "Bearer EAAJHMOd6SJcBO5Lkr7q4KkclXlBK47Bo9h4Vhy553qZCfkVF2S142m7fMEMnpOKzlP7oeKt0UIShwdI26OnNUXJJt2ZCZB3pMszDCCNpxF5ja6Uizryfyt5hQw1ZC2emx4zXNFJB2ceTVOpuZB0zF4deGvzorTHA6nBCUbbGrtMXadrSxGydl3QN6h9YGTrOt46wxg5izZCA3mZBEUs9zYZD" ];

    $client = new \GuzzleHttp\Client();

    //dd($params);

    $response = $client->request('POST', $url, ["headers" => $headers, "json" => $params]);
    //dd($response);
    $data = json_decode($response->getBody(), true);
   // Log::Info($data);

    return view('thanks');
  }*/
  public function sendWhatsappMultiMessage(Request $request)
  {
    $contactArray=["237695485857","237690861311","237681978368","237692845493","237695485857"];

      $url = "https://graph.facebook.com/v17.0/109528645513854/messages" ;
     foreach($contactArray as $contact){
      $params = [  
        "messaging_product" => "whatsapp",
        "to" => $contact,
        "type" => "template",
        "template" => [
        "name" => "hello_world",
          "language" => [
              "code" => "en_US",
            ]
          ]
      ];
      $headers = ["Authorization" => "Bearer EAAJHMOd6SJcBO4oZAD4fKnOk3yYr9WlJPiX2bXRKvL3ct8vRUAZA5EIbFD0aCmakw6uaGev8wqXHhdOQOLPgBQnpRo8nzf25HGXZAaRfkdxftilLElZA7NyJDudwm6KR6D9SH7B4vBEnkI1mBJ4seDM2f54XyRsvl3dvCKaP8TM9RSZAEUqwTqnQjkCODJIglPnpd6DtyU8ON2FzLez4ZD" ];

      $client = new \GuzzleHttp\Client();
  
      //dd($params);
  
      $response = $client->request('POST', $url, ["headers" => $headers, "json" => $params]);
    
     }
    $data = json_decode($response->getBody(), true);
    Log::Info($data);

    return back()->with('success', 'Les données ont été enregistrées avec succès.');
  }
}

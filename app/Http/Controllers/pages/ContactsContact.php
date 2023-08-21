<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ContactImport;

class ContactsContact extends Controller
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
    $contacts = DB::select ('select *from contacts');
    $listContactsBlogs = DB::select ('select *from list_contact_blogs');
   return view('content.pages.pages-contacts-contact')->with('contacts',$contacts)->with('listContactBlogs',$listContactsBlogs)->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
  
  }
  public function store(Request $request)
  {
    $contactAdd =$request->input('submitContactButtonSave');
    $contactImport =$request->input('Upload');
    if (isset($contactAdd))
    {

    $request->validate([
      'whatsapp' =>['required'],
      'email' => ['required'],
      'sms' => ['required'],
      'contactName' => ['required'],
    ]);
    $contact=new contact();
    $contact = contact::create([
      'list' =>$request->input('content'),
      'email' =>$request->input('email'),
      'contactName' =>$request-> input('contactName'),
      'phoneNumber'=>$request->input('sms'),
      'whatsapp'=>$request->input('whatsapp')
    ]);
    $idlist=$request->input('select');
    $contact->listcontactblogs()->attach($idlist);
      
   // Pour terminer, on affiche "Bonjour, Homer !";
   return redirect()->back()->with('success', 'your message,here'); 
   
  }
  elseif (isset($contactImport)) {

   Excel::import(new ContactImport, $request->file('contactFile'));
   return redirect()->back()->with('success', 'L\'importation des contacts a été effectuée avec succès.');
   // Pour terminer, on affiche "Bonjour, Homer !";
   //return back()->with('success', 'Les données ont été enregistrées avec succès.');

   }
  
  }

 
 
}

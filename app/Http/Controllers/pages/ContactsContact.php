<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Http\Client\Request as ClientRequest;
=======
>>>>>>> 914f0ddd7725c6f9bd6b1472f874ef3cbf9bb9ef
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
<<<<<<< HEAD
        $currentUsersAccount = session('currentUsersAccount');
         $currentUser = session('currentUser');
      }
     }
    $contacts = DB::select ('select *from contacts');
    $listContactsBlogs = DB::select ('select *from list_contact_blogs');

    return view('content.pages.pages-contacts-contact')->with('contacts',$contacts)->with('listContactBlogs',$listContactsBlogs)->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
=======
use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ContactImport;

class ContactsContact extends Controller
{
  public function index()
  {
    $contacts = DB::select('select *from contacts');
    return view('content.pages.pages-contacts-contact',['contacts'=>$contacts]);
>>>>>>> 7605ca9b460b031e704798c1c8ca0f5d1c4f3359
=======
        if ($request->session()->has('currentUser')) {
          // The key exists in the session.
          $currentUsersAccount = session('currentUsersAccount');
           $currentUser = session('currentUser');
        }
       }
    $contacts = DB::select('select *from contacts');
    return view('content.pages.pages-contacts-contact')->with('contacts',$contacts)->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
>>>>>>> 914f0ddd7725c6f9bd6b1472f874ef3cbf9bb9ef
  
  }
  public function store(Request $request)
  {
<<<<<<< HEAD
<<<<<<< HEAD
    $request->validate([
      'whatsapp' =>['required'],
      'email' => ['required'],
      'sms' => ['required'],
      'contactName' => ['required'],
    ]);

    $contact=new contact();
    $contact = contact::create([
=======

    $post = contact::create([
      'list' =>$request->input('content'),
>>>>>>> 914f0ddd7725c6f9bd6b1472f874ef3cbf9bb9ef
      'email' =>$request->input('email'),
      'contactName' =>$request-> input('contactName'),
      'phoneNumber'=>$request->input('sms'),
      'whatsapp'=>$request->input('whatsapp')
    ]);
      
  // Pour terminer, on affiche "Bonjour, Homer !";
  return redirect()->back()->with('success', 'your message,here'); 
=======

    $post = contact::create([
      'list' =>$request->input('content'),
      'email' =>$request->input('email'),
      'contactName' =>$request-> input('contactName'),
      'phoneNumber'=>$request->input('sms'),
      'whatsapp'=>$request->input('whatsapp')
    ]);
      
  // Pour terminer, on affiche "Bonjour, Homer !";
  return back()->with('success', 'Les données ont été enregistrées avec succès.');

  }

  public function storeImportContacts(Request $request)
  {
    Excel::import(new ContactImport, $request->file('contactFile'));
    return redirect()->back()->with('success', 'L\'importation des contacts a été effectuée avec succès.');
  // Pour terminer, on affiche "Bonjour, Homer !";
  //return back()->with('success', 'Les données ont été enregistrées avec succès.');

<<<<<<< HEAD
>>>>>>> 7605ca9b460b031e704798c1c8ca0f5d1c4f3359
=======
>>>>>>> 914f0ddd7725c6f9bd6b1472f874ef3cbf9bb9ef
  }
 
}

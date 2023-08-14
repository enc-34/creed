<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Models\contact;
use App\Models\ListContactBlog;
use DateTime;
use Illuminate\Support\Facades\DB;

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

    $contacts = DB::select('select *from contacts');
    $listContactsBlogs = DB::select('select *from list_contact_blogs');

    return view('content.pages.pages-contacts-contact')->with('contacts',$contacts)->with('listContactBlogs',$listContactsBlogs)->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
  
  }
  public function store(Request $request)
  {
    $contact=new contact();
    $contact = contact::create([
      'email' =>$request->input('email'),
      'contactName' =>$request-> input('contactName'),
      'phoneNumber'=>$request->input('sms'),
      'whatsapp'=>$request->input('whatsapp'),
    ]);
    $idlist=$request->input('select');
    $contact->listcontactblogs()->attach($idlist);

  // Pour terminer, on affiche "Bonjour, Homer !";
  return back()->with('success', 'Les données ont été enregistrées avec succès.');

  }
 
}

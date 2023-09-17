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

  $contacts=[];
  $listContactsBlogs=[];
    $folders=DB::select( 'SELECT *
      FROM folders
      WHERE id IN (
      SELECT folder_id
      FROM folder_user1
      WHERE user1_id =' .$currentUser->id.')');
     // dd($folders);
    foreach($folders as $folder){
      $listContactsBlogs = DB::select( 'SELECT *
      FROM list_contact_blogs
      WHERE id IN (
          SELECT list_contact_blog_id
          FROM folder_list_contact_blog
          WHERE folder_id ='.$folder->id.'
        )');
        //dd($listContactsBlogs);
      foreach($listContactsBlogs as $list){
        $contacts = array_merge($contacts,DB::select( 'SELECT *
        FROM contacts
        WHERE id IN (
            SELECT contact_id
            FROM contact_list_contact_blog
            WHERE list_contact_blog_id =' .$list->id.
         ' )'));

      }
      //dd($contacts);
    }
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
      'phoneNumber'=>$request->input('full_phone2'),
      'whatsapp'=>$request->input('full_phone')
    ]);
    $idlist=$request->input('selectListContactAddOne');
    $contact->listcontactblogs()->attach($idlist);

   // Pour terminer, on affiche "Bonjour, Homer !";
   return redirect()->back()->with('success', 'your message,here');

  }
  elseif (isset($contactImport)) {

   $importedContact=Excel::toArray(new ContactImport, $request->file('contactFile'));
   //dd($importedContact);
   $idlist=$request->input('selectListAtach');
  foreach($importedContact as $contactItemLevel1){
    foreach($contactItemLevel1 as $contactItem){
      $contact=new contact();
      //dd($contactItem);
      $contact = contact::create([
      'email' =>$contactItem['email'],
      'contactName' =>$contactItem['name'],
      'phoneNumber'=>$contactItem['phone'],
      'whatsapp'=>$contactItem['whatsapp']
      ]);
      $contact->listcontactblogs()->attach($idlist);
    }

  }

   //dd($importedContact);
   return redirect()->back()->with('success', 'L\'importation des contacts a été effectuée avec succès.');
   }

  }

}

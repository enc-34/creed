<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\folder;
use App\Models\ListContactBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactsListFolder extends Controller
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
    }

    return view('content.pages.pages-contacts-list-folder')->with('list_contact_blogs',$listContactsBlogs)->with('folders',$folders)->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
  }

  public function store(Request $request)
  {
    //dd('bommmmm');

    $contactListSaveEve =$request->input('submitContactListButtonSave');
    $contactFolderSaveEve =$request->input('submitFolderButtonSave');
   if (isset($contactListSaveEve))
    {
     # Publish-button was clicked
     $validate=$request->validate([
      'listName' => ['bail','required'],
      'selectFolder' => '',
      'description' => ['required'],
     ]);
     $list_contact_blog=new listContactBlog();
     $list_contact_blog= listContactBlog::create([
     'listName'=> $request->input('listName'),
     'folderList'=> $request->input('selectFolder'),
     'description'=> $request->input('description'),
     ]);
     $idfold=$request->input('selectFolder');
     $list_contact_blog->folders()->attach($idfold);



     return redirect()->back()->with('success', 'your message,here');     }

   elseif (isset($contactFolderSaveEve)) {
     # Save-button was clicked
     $validate=$request->validate([
      'folderDescription' => ['required'],
      'foldername' => ['required'],
      'selectListContact' => '',
    ]);
     $folder=new folder();
     $folder= folder::create([
      'description'=> $request->input('folderDescription'),
      'FolderName'=> $request->input('foldername'),
      'contactList'=> $request->input('selectListContact'),
     ]);
     $idlist=$request->input('selectListContact');
    $folder->listcontactblogs()->attach($idlist);
    $currentUser = session('currentUser');
    $folder->user1s()->attach($currentUser->id);

    return redirect()->back()->with('success', 'your message,here');     }
  }


}

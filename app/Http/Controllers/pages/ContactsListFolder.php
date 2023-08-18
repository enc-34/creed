<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\ListContactBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactsListFolder extends Controller
{
  public function index()
  {

    $list_contact_blogs = DB::select('select * from list_contact_blogs');
    return view('content.pages.pages-contacts-list-folder',['list_contact_blogs'=>$list_contact_blogs]);
  }

  public function store(Request $request)
  {
    
    $this->validate($request, [
      'listName' => 'required',
      'folderList' => 'required',
      'description' => 'required'
     ]);
    
     $post = listContactBlog::create([
      'listName'=> $request->input('listName'),
      'folderList'=> $request->input('folderList'),
      'description'=> $request->input('description'),
    ]);
    //dd($post);
    return back()->with('success', 'Les données ont été enregistrées avec succès.');
  }

}

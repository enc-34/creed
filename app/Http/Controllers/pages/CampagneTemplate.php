<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\campaign;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class CampagneTemplate extends Controller
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
      return view('content.pages.pages-campagne-template')->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);

     }else{
      return view('content.authentications.auth-login-basic');
     }
  }
  public function campagneTemplateOne(Request $request)
  {
    if ($request->session()->has('currentUsersAccount')) {
      // The key exists in the session.
      if ($request->session()->has('currentUser')) {
        // The key exists in the session.
        $currentUsersAccount = session('currentUsersAccount');
         $currentUser = session('currentUser');
      }else{
        return view('content.authentications.auth-login-basic');
       }
     }


    return view('content.pages.pages-campagne-template-one')->with('currentUsersAccount',session('currentUsersAccount'))->with('currentUser',session('currentUser'));
  }

  public function postCampagneTemplateOne(Request $request)
  {

    if ($request->session()->has('currentUsersAccount')) {
      // The key exists in the session.
      if ($request->session()->has('currentUser')) {
        // The key exists in the session.
        $currentUsersAccount = session('currentUsersAccount');
         $currentUser = session('currentUser');
      }else{
        return view('content.authentications.auth-login-basic');
       }
     }
     $request->validate([
      'categoryTemplate' =>['required'],
      'nameTemplate' => ['required'],
      'languages' => ['required'],
    ]);

     $categoryTemplate=$request->input('categoryTemplate');
     $typeOffre=$request->input('typeOffre');
     $nameTemplate=$request->input('nameTemplate');
     $languageTemplate=$request->input('languages');

     $request->session()->put('categoryTemplate', $categoryTemplate);
     $request->session()->put('typeOffre', $typeOffre);
     $request->session()->put('nameTemplate', $nameTemplate);
     $request->session()->put('languages', $languageTemplate);
     return redirect()->route('createTemplateStepTwo')->with('currentUsersAccount',session('currentUsersAccount'))->with('currentUser',session('currentUser'))->with('nameTemplate',session('nameTemplate'));
    }
  public function campagneTemplateTwo(Request $request)
  {
    if ($request->session()->has('currentUsersAccount')) {
      // The key exists in the session.
      if ($request->session()->has('currentUser')) {
        // The key exists in the session.
        $currentUsersAccount = session('currentUsersAccount');
         $currentUser = session('currentUser');
      }else{
        return view('content.authentications.auth-login-basic');
       }
     }
    return view('content.pages.pages-campagne-template-two')->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
  }
  public function postCampagneTemplateTwo(Request $request)
  {

  }
  public function campagneTemplateThree(Request $request)
  {
    if ($request->session()->has('currentUsersAccount')) {
      // The key exists in the session.
      if ($request->session()->has('currentUser')) {
        // The key exists in the session.
        $currentUsersAccount = session('currentUsersAccount');
         $currentUser = session('currentUser');
      }
     }else{
      return view('content.authentications.auth-login-basic');
     }
    return view('content.pages.pages-campagne-template-three')->with('currentUsersAccount',$currentUsersAccount)->with('currentUser',$currentUser);
  }
  public function postCampagneTemplateThree(Request $request)
  {
//important: https://www.scratchcode.io/laravel-video-upload-tutorial-with-example/
// https://www.laravelia.com/post/laravel-10-validate-any-type-of-file-example
//https://medium.com/swlh/upload-video-in-chunks-with-preview-and-progress-bar-using-javascript-5eb95745f9c5
    $submitVideo =$request->formFilVideoSubmit;
    $imageSubmit =$request->formFilImageSubmit;
    if (isset($imageSubmit)){

      request()->validate([
        'formFileImage' => 'required|image|mimes:jpeg,png,jpg|max:5120',
    ]);

    if ($files = $request->file('formFileImage')) {
      $currentUser = session('currentUser');
      $currentDate = new DateTime();
      $fileName =  "CREED-images-".$currentUser->id.'-'.time(). '.' . $request->formFileImage->getClientOriginalExtension();
    $request->formFileImage->storeAs('images', $fileName);
      return response()->json(["image" => $fileName])->with('success','Image has been successfully uploaded');
    }
    }elseif(isset($submitVideo)){
      Validator::validate($request->all(), [
        'formFileVideo' => [
            'required',
            File::types(['mp4'])
                ->min(50)
                ->max(16000),
        ]
    ]);

    $currentUser = session('currentUser');
    $currentDate = new DateTime();
    $fileName =  "CREED-videos-".$currentUser->id.'-'.time(). '.'. $request->formFileVideo->getClientOriginalExtension();
    $filePath =  'videos/'.$fileName;
    $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->formFileVideo));
    // File URL to access the video in frontend
        $url = Storage::disk('public')->url($filePath);
        return back()
        ->with('success','Video has been successfully uploaded');

  }
}
}

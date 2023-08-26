<?php

namespace App\Http\Controllers\authentications;
use App\Models\Account;
use App\Models\User1;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterBasic extends Controller
{

  public function index(Request $request)
  {
     $request->session()->forget(['currentUsersAccount', 'currentUser','account','firstName','lastName']);
     return view('content.authentications.auth-create-step-one');
  }
  public function createStepOne(Request $request)
  {

    return view('content.authentications.auth-create-step-two');
  }
  public function postCreateStepOne(Request $request)
  {
    $validated = $request->validate([
      'firstName' => 'required',
      'lastName' => 'required',
  ]);
    session(['firstName' => $request->input('firstName')]);
    session(['lastName' => $request->input('lastName')]);
  return view('content.authentications.auth-create-step-two');
  }
  public function createStepTwo(Request $request)
  {
    return view('content.authentications.auth-create-step-three');
  }
  public function postCreateStepTwo(Request $request)
  {
    $validated = $request->validate([
      'password'  => ['required','confirmed', Password::min(8)
      ->letters()
      ->mixedCase()
      ->numbers()
      ->symbols()
      ->uncompromised()],
      'username' => ['required', 'string', 'max:255', 'unique:accounts', 'regex:/^\S*$/u'],
      'email'=> ['email:rfc','unique:accounts'],
      'userPhoneNumber' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:5','unique:accounts'],
  ]);
  $account = new Account();
  if($request->input('password')==$request->input('password_confirmation')and $request->input('username')!=
  '' and $request->input('email')!=''){
    $account-> userPhoneNumber= $request->input('userPhoneNumber');
    $account->userName= $request->input('username');
    $account->email= $request->input('email');
    $account-> password= $request->input('password');
  }
  $account-> isActive= true;
  $account-> isPremiumAccount= true;
  $account-> role='Admin';
    if(empty($request->session()->get('account'))){
      //$product->fill($validatedData);
      $request->session()->put('account', $account);
    }else{
      $account = $request->session()->get('account');
      //$product->fill($validatedData);
      $request->session()->put('account', $account);
    }
  return view('content.authentications.auth-create-step-three');

  }
  public function createStepThree(Request $request)
  {
    return view('content.authentications.auth-create-step-three');
  }
  public function postCreateStepThree(Request $request)
  {
    $validated = $request->validate([
      'campanyActivity' => 'required',
      'companyName' => 'required',
      'companyUrl' => 'required|url',
      'professionalCode' => 'required',
      'businessPhoneNumber' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:5'],
      'address' => 'required',
  ]);
        $account = $request->session()->get('account');
        $currentUser1 = $request->session()->get('user1');

        //dd($account);
        $account = Account::create([
        'userName'=> $account->userName,
        'email'=> $account->email,
        'password'=> $account->password,
        'userPhoneNumber'=> $account->userPhoneNumber,
        'isActive'=> true,
        'isPremiumAccount'=> false,
        'role'=> 'Admin',
        'modelUser'=> '',
      ]);
        //dd($currentUser1->phoneNumber);
        $user = User1::create([
          'campanyActivity'=> $request->input('campanyActivity'),
          'companyName'=> $request->input('companyName'),
          'companyUrl'=> $request->input('companyUrl'),
          'picture'=> $request->input('picture'),
          'professionalCode'=> $request->input('professionalCode'),
          'postalCode'=> $request->input('postalCode'),
          'country'=> $request->input('country'),
          'firstName'=> $request->session()->get('firstName'),
          'lastName'=> $request->session()->get('lastName'),
          'businessPhoneNumber'=> $request->input('businessPhoneNumber'),
          'address'=> $request->input('address'),
          'accountId'=> $account->id,
        ]);
        $defaulFolder=new folder();
        $defaulFolder= folder::create([
         'description'=> 'Defaul Folder',
         'FolderName'=> 'Defaul Folder',
         'contactList'=> '',
        ]);
        $defaulLlist= listContactBlog::create([
          'listName'=> 'Defaul List',
          'folderList'=> '',
          'description'=> 'My Custom contact list',
          ]);
          $idfold=$defaulFolder->id;
          $defaulLlist->folders()->attach($idfold);
        //dd($account->id);
        $request->session()->regenerate();
        session(['currentUsersAccount' => $account]);
        session(['currentUser' => $user]);
            return redirect()->route('dashboard-analytics')
            ->withSuccess('You have successfully registered & logged in!');
  }

  public function store(Request $request)

  {


  }
}

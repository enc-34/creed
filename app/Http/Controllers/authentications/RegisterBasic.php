<?php

namespace App\Http\Controllers\authentications;

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
<<<<<<< HEAD
        $accountInsession = $request->session()->get('account');
=======
    $validated = $request->validate([
      'campanyActivity' => 'required',
      'companyName' => 'required',
      'companyUrl' => 'required|url',
      'professionalCode' => 'required',
      'businessPhoneNumber' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:5'],
      'address' => 'required',
  ]);
        $account = $request->session()->get('account');
>>>>>>> 914f0ddd7725c6f9bd6b1472f874ef3cbf9bb9ef
        $currentUser1 = $request->session()->get('user1');

        $account = Account::create([
        'userName'=> $accountInsession->userName,
        'email'=> $accountInsession->email,
        'password'=> $accountInsession->password,
        'userPhoneNumber'=> $accountInsession->userPhoneNumber,
        'isActive'=> true,
        'isPremiumAccount'=> false,
        'role'=> 'Admin',
        'modelUser'=> '',
      ]);
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
        //dd($account->id);
        $request->session()->regenerate();
        session(['currentUsersAccount' => $account]);
        session(['currentUser' => $user]);
            return redirect()->route('dashboard-analytics')
            ->withSuccess('You have successfully registered & logged in!');
  } 

  public function store(Request $request)
 
  {  
   /* table->boolean('isPremiumAccount');
            $table->string('role');
            $table->string('modelUser');
            $table->string('userName');
            $table->string('password');
            $table->boolean('isActive');
            */
    /* $table->id();
            $table->unsignedBigInteger('accountId');
            $table->foreign('accountId')->references('id')->on('accounts');
            $table->string('campanyActivity');
            $table->string('companyName');
            $table->string('companyUrl');
            $table->string('picture');
            $table->string('professionalCode');
            $table->string('postalCode');
            $table->string('country');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('phoneNumber');
            $table->string('address');
            */
    
    /* $account = Account::create([
      'userName'=> $request->input('username'),
      'email'=> $request->input('email'),
      'password'=> $request->input('password'),
      'isActive'=> true,
      'isPremiumAccount'=> false,
      'role'=> 'Admin',
      'modelUser'=> '',
    ]); 
    $user = User1::create([
      'campanyActivity'=> $request->input('campanyActivity'),
      'companyName'=> $request->input('companyName'),
      'companyUrl'=> $request->input('companyUrl'),
      'picture'=> $request->input('picture'),
      'professionalCode'=> $request->input('professionalCode'),
      'postalCode'=> $request->input('postalCode'),
      'country'=> $request->input('country'),
      'firstName'=> $request->input('firstName'),
      'lastName'=> $request->input('lastName'),
      'phoneNumber'=> $request->input('phoneNumber'),
      'address'=> $request->input('address'),
      'accountId'=> $account->id,
    ]);  */
    /* $request->session()->regenerate();
    session(['currentUsersAccount' => $account]);
        return redirect()->route('dashboard-analytics')
        ->withSuccess('You have successfully registered & logged in!'); */
    
  }
  public function store(Request $request)
 
  {  
    
    $post = User::create([
      'name'=> $request->input('username'),
      'email'=> $request->input('email'),
      'password'=> $request->input('password'),
      'slug'=> \Str::slug($request->input('email'))
    ]); 
    $request->session()->regenerate();
        return redirect()->route('dashboard-analytics')
        ->withSuccess('You have successfully registered & logged in!');
    
  }
}

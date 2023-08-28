<?php

namespace App\Http\Controllers\authentications;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;


class LoginBasic extends Controller
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
  return view('content.authentications.auth-login-basic');

 }
 public function authenticate(Request $request)
    {
      $validated = $request->validate([
        'email' => ['required','email'],
        'password' => ['required', Password::min(8)
        ->letters()
        ->mixedCase()
        ->numbers()
        ->symbols()
        ->uncompromised()],
    ]);
     // dd($request->input('email'));
     $account=DB::select('select * from accounts where email="'.$request->email.'"'.'or userName="'.$request->email.'"');
     if(count($account) > 0) {
       $currentAccountUsers=$account[0];
       if (Hash::check($request->password, $currentAccountUsers->password)) { 
       // $request->session()->flush();
         $request->session()->regenerate();
         session(['currentUsersAccount' => $account[0]]);
         $users=DB::select('select * from user1s where accountId="'.$currentAccountUsers->id.'"');
         session(['currentUser' => $users[0]]);
         return redirect()->route('dashboard-analytics')->withSuccess('You have successfully logged in!');
       }
      }

    return back()->withErrors([  'email' => 'Your provided credentials do not match in our records.',
    ])->onlyInput('email');

  }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

use Exception;

class FacebookController extends Controller
{
   public function facebookLogin(Request $request)
   {
    return Socialite::driver('facebook')->redirect();
   }
   public function facebookRedirect(Request $request)
   {
      try {
          $user = Socialite::driver('facebook')->stateless()->user();
          $existingUser = User::where('facebook_id', $user->id)->first();
   
          if($existingUser){
              Auth::login($existingUser);
              return redirect('/dashboard');
          }else{
              $createUser = User::create([
                  'name' => $user->name,
                  'email' => $user->email,
                  'facebook_id' => $user->id
              ]);
  
              Auth::login($createUser);
              return redirect('/dashboard');
          }
  
      } catch (\Throwable $th) {
        throw $th;
     }
  }
 }
 
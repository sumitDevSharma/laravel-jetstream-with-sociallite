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
    return Socialite::driver('facebook')->redirect();
   }
}

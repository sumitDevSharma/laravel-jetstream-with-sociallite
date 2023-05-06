<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function getUser()
    {
       return User::whereNotIn('id',[Auth::user()->id])->get();
    }
}

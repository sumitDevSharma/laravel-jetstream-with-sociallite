<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Events\SendMessage;
use Illuminate\Http\Request;
use App\Models\User;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        $users = User::whereNotIn('id',[Auth::user()->id])->get();
        return view('chat',['users'=>$users]);
    }

    public function getMessage(Request $request)
    {
        
        return Message::with('user')->find('')->get();
        
    }

    public function sendMessage(Request $request)
    {
        
        $user = Auth::user();

        $messages = $user->messages()->create([
            'message' => $request->message
        ]);

        broadcast(new SendMessage($user, $messages))->toOthers();

        return 'message sent';
        
    }
}

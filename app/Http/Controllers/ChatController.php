<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showChat()
    {
        return view('chat.show');
    }

    public function messageReceived(Request $request)
    {
        $rules = [
            'message' => 'required',
        ];

        $request->validate($rules);
        broadcast(new MessageSent($request->user(), $request->$message));
        return response()->json('Message broadcast');
    }

    public function greetReceived(Request $request, User $user)
    {
        return "Greeting {$user-> name} from {$request-> user()->name}";
    }


}

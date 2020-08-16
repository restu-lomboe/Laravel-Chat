<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ChatStoreEvent;
use App\Chat;

class ChatController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function allChat()
    {
        return Chat::with('user')->orderBy('created_at', 'desc')->take(10)->get();
    }

    public function store(Request $request)
    {
        $chat = Chat::create([
            'subject' => $request->subject,
            'user_id' => auth()->user()->id
        ]);

        broadcast(new ChatStoreEvent($chat))->toOthers();

        return $chat;
    }
}

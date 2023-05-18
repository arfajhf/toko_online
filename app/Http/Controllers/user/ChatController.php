<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        if (! auth()->user()->chatUser()->exists()) {
            auth()->user()->chatUser()->create();
        }

        $user = auth()->user();

        return view('user.chat.index', compact('user'));
    }

    public function getChatUser()
    {
        $chats = auth()->user()->chatUser()->with('chat_replies')->first();

        $chats->chat_replies->map(function ($row) {
            $row->created_at_formated = date('H:i d-m-y', strtotime($row->created_at));
        });

        return $chats;
    }

    public function storeChatUser(Request $request, Chat $chat)
    {
        $chat->chat_replies()->create([
            'admin_id' => $request->user_id,
            'message' => $request->message
        ]);

        return response()->json([
            'status' => 'Success'
        ]);
    }
}

<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('user.chat.index', compact('user'));
    }

    public function getChatUser()
    {
        $chats = Chat::get();

        $chats->each(function($chat) {
            $chat['user'] = $chat->user;
            $chat->chat_replies->map(function ($row) {
                $row->created_at_formated = date('H:i d-m-y', strtotime($row->created_at));
            });
        });

        return $chats;
    }

    public function storeChatUser(Request $request)
    {
        Chat::create([
            'admin_id' => $request->user_id,
            'message' => $request->message
        ]);

        return response()->json([
            'status' => 'Success'
        ]);
    }

    public function storeReplyChatUser(Request $request, Chat $chat)
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

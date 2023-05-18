<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\ChatReply;
use Illuminate\Database\Seeder;

class ChatReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChatReply::create([
            'chat_id' => 1,
            'admin_id' => Admin::where('role', 'user')->first()->id,
            'message' => 'Test Chat'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Chat;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chat::create([
            'admin_id' => Admin::where('role', 'user')->first()->id,
            'new_chat' => 'Test chat'
        ]);
    }
}

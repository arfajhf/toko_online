<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() {
        return $this->hasOne(Admin::class, 'id', 'admin_id');
    }
    
    public function chat_replies()
    {
        return $this->hasMany(ChatReply::class);
    }
}

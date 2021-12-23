<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    public function chat() {
        $this->belongsTo(Chats::class, 'chat_id', 'id');
    }

    public function author() {
        $this -> hasOne(User::class, 'id', 'author');
    }
    public function to() {
        $this -> hasOne(User::class, 'id', 'to');
    }
}

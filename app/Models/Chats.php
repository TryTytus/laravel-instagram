<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function first_user() {
        return $this->belongsTo(User::class, 'first_user_id', 'id');
    }
    public function last_user() {
        return $this->belongsTo(User::class, 'last_user_id', 'id');   
    }
    public function messages() {
        return $this->hasMany(Messages::class, 'chat_id', 'id');
    }
    
    
}

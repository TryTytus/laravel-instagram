<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','type', 'post_id'
    ];

    public function observer() {
        return $this->hasMany(Observer::class, 'observing', 'user_id');
    }

    public function user() {
        return $this->hasMany(User::class, 'id', 'user_id');
    }
}

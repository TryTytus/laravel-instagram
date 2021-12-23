<?php

namespace App\Models;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;


class Posts extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'nickname', 'nickname');
    }

    public function likes() {
        return $this->hasMany(Likes::class);
    }

    public function commets() {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}

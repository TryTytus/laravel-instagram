<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    use HasFactory;

    protected $primaryKey = null;
    public $incrementing = false;

    
    public function posts() {
        return $this->belongsTo(Post::class);
    }
    public function users() {
        return $this->belongsTo(User::class);
    }
}

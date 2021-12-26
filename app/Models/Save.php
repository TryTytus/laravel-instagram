<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'nickname',
        'post_id'
    ];

    public function post() {
        return $this->hasOne(Posts::class, 'id', 'post_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'nickname', 'nickname');
    } 
}

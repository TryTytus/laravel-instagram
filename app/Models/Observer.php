<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observer extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'observer',
        'observing'
    ];

    public function notifications() {
        return $this->hasMany(Notification::class, 'user_id', 'observing');
    }
}

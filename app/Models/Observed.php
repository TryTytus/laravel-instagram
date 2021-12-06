<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observed extends Model
{
    protected $primaryKey = null;
    public $incrementing = false;

    use HasFactory;

    public function users() {
        return $this->belongsTo(User::class);
    }
}

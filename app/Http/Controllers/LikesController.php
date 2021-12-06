<?php

namespace App\Http\Controllers;

use App\Models\Likes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
{
    public function status($id) {
        $find = Likes::where([
            ['post_id', $id],
            ['user_id', Auth::user()['id']]
        ])->count();
        if(!$find) {
            return ['status' => false];
        }
        return ['status' => true];
    }
}

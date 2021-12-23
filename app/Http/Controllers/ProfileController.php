<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index($nickname) {
        $profile = User::with('profile', 'posts')->where(
            'nickname', '=', $nickname
        )->get();

        return view('profile', ['profile' => $profile[0]]);

        //return $profile[0];
    }
}

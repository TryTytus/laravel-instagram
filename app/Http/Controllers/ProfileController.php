<?php

namespace App\Http\Controllers;

use App\Models\Observer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    function index($nickname)
    {
        $profile = User::with('profile', 'posts')->where(
            'nickname',
            '=',
            $nickname
        )->get();

        $isme = $profile[0]->id == Auth::user()->id;
        $isfollowing = 0;

        if ($profile[0]->id != Auth::user()->id) {
            $isfollowing = Observer::where([
                ['observer', '=', Auth::user()->id],
                ['observing', '=', $profile[0]->id]
            ])->count();
        }

        return view('profile', [
            'profile' => $profile[0],
            'isfollowing' => $isfollowing,
            'isme' => $isme,
            'notifications' => NotificationController::getAll()
        ]);

        //return $profile[0];
    }
}

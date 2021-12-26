<?php

namespace App\Http\Controllers;

use App\Models\Observer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObserverController extends Controller
{
    public function store(int $follow) {
        if ($follow == Auth::user()->id) return;
        $isfollowing = Observer::where([
            ['observer', '=', Auth::user()->id],
            ['observing', '=', $follow]
        ])->count();
        if($isfollowing) return;

        $create = Observer::create([
            'observer' => Auth::user()->id,
            'observing' => $follow
        ]);
        return $create;
    }

    public function delete(int $unfollow) {
        $isfollowing = Observer::where([
            ['observer', '=', Auth::user()->id],
            ['observing', '=', $unfollow]
        ])->count();
        if (!$isfollowing) return;
            
        Observer::where([
            ['observer', '=', Auth::user()->id],
            ['observing', '=', $unfollow]
        ])->delete();
    }
}

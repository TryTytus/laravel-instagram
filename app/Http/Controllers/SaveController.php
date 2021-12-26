<?php

namespace App\Http\Controllers;

use App\Models\Save;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaveController extends Controller
{
    public function index() {
        $saves = User::with('saves')->find(Auth::user()->id);

        return $saves;
    }

    public function store(int $post_id) {
        $find = Save::where([
            ['nickname', Auth::user()['nickname']],
            ['post_id', $post_id],
        ])->count();

        if ($find !== 0) {
            return null;
        }

        $addSave = Save::create([
            'nickname' => Auth::user()['nickname'],
            'post_id' => $post_id,
        ]);
    }

    public function delete(int $post_id) {
        $find = Save::where([
            ['nickname', Auth::user()['nickname']],
            ['post_id', $post_id],
        ])->count();

        if ($find === 0) {
            return null;
        }

        Save::where([
            ['nickname', Auth::user()['nickname']],
            ['post_id', $post_id], 
        ])->delete();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function changeAvatar(Request $req)
    {
        try {
            $file = $req->file('imgInp')->store('public');
            $user_id = Auth::user()->id;
            $user = User::find($user_id);
            $user->avatar = pathinfo($file)['basename'];

            $user->save();
            //return redirect('storage/' . pathinfo($file)['basename']);
            return redirect('profile/' . $user -> nickname);
        } catch (\Exception $e) {
            return $e;
        }
    }
}

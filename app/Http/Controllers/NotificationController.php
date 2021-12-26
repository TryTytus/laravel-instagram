<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Observer;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    static public function getAll() {
        $user_id = Auth::user()->id;
        $notifications = Observer::where('observer', $user_id)
        ->getRelation('notifications')->where(
            'user_id', '!=', $user_id
        )->with('user')->get();

        return $notifications;
    }

    static public function store(int $post_id, string $type) {
        $user_id = Auth::user()->id;

        $notification = Notification::create([
            'user_id' => $user_id,
            'type' => $type,
            'post_id' => $post_id
        ]);

        return $notification;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Chats;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Messages;
use App\Models\Posts;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ChatsController extends Controller
{

    public function getAll()
    {
        $user = Auth::user();
        $first = Chats::with('first_user', 'last_user')
            ->where('first_user_id', '=', Auth::user()->id);
        $last = Chats::with('first_user', 'last_user')
            ->where('last_user_id', '=', Auth::user()->id)
            ->union($first)
            ->get();
        $all_users = User::where('id', '!=', $user->id)->get();

        return view('messages', [
            'chats' => $last, 'user' => $user,
            'all_users' => $all_users,
            'notifications' => NotificationController::getAll()
        ]);
    }

    public function index($id)
    {
        $user = Auth::user();
        $first = Chats::with('first_user', 'last_user')
            ->where('first_user_id', '=', Auth::user()->id);
        $last = Chats::with('first_user', 'last_user')
            ->where('last_user_id', '=', Auth::user()->id)
            ->union($first)
            ->get();

        $this_chat = Chats::with('first_user', 'last_user')
            ->where([
                ['first_user_id', '=', Auth::user()->id],
                ['id', '=', $id]
            ])->orWhere([
                ['last_user_id', '=', Auth::user()->id],
                ['id', '=', $id]
            ])->first();

        if (!$this_chat) {
            return abort(403, 'Unauthorized action.');
        }

        $all_users = User::where('id', '!=', $user->id)->get();

        $messages = Messages::where('chat_id', '=', $id)->get();
        return view(
            'messages',
            [
                'messages' => $messages,
                'chats' => $last,
                'user' => $user,
                'this_chat' => $this_chat,
                'all_users' => $all_users,
                'notifications' => NotificationController::getAll()
            ]
        );
    }

    public function createChat($id)
    {
        if ($id === Auth::user()->id) {
            throw new HttpException(404, 'bad req');
        }
        try {
            $ischat = Chats::where([
                ['first_user_id', '=', $id],
                ['last_user_id', '=', Auth::user()->id]
            ])->orWhere([
                ['first_user_id', '=', Auth::user()->id],
                ['last_user_id', '=', $id]
            ])->first();
            if ($ischat) {
                return redirect('/chats/' . $ischat->id);
            } else {
                $chat = new Chats;
                $current_user = Auth::user();

                $chat->first_user_id = $current_user->id;
                $chat->last_user_id = $id;
                $chat->save();

                return redirect('/chats/' . $chat->id);
            }
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function findByNick(string $nickname)
    {
        $to = User::where('nickname', $nickname)->first();
        return $this->createChat($to->id);
    }
}

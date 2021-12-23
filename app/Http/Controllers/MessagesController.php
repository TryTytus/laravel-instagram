<?php

namespace App\Http\Controllers;

use App\Events\Messages as EventsMessages;
use App\Models\Chats;
use App\Models\Messages;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class MessagesController extends Controller
{
    public function store(Request $request) {
        $isauthorized = Chats::where(
            'first_user_id','=', $request->chat)->orWhere(
            'last_user_id', '=', $request->chat
            )->get();

        if($isauthorized === null){
            return new UnauthorizedException();
        }
        event(new EventsMessages(
            $request->message,
                'mychanel'.$request->chat,
                $request->user
        ));

        $message = new Messages;
        $message->body = $request->message;
        $message->chat_id = $request->chat;
        $message->author = Auth::user()->id;
        $message->to = 0;
        
        $message->save();
    }
}

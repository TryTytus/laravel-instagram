<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Messages implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $message;
    public $chat;
    public $author;
    // public $chat;
    // public $user;


    public function __construct($message, $chat, $author)
    {
        $this->message = $message;
        $this->chat = $chat;
        $this->author = $author;
        // $this->chat = $chat;
        // $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel($this->chat);
    }
    public function broadcastAs()
  {
      return 'my-event';
  }
}

<a href="/chats/{{$chat->id}}">
    <div class="flex px-5 my-4">
        <div 
            style="background-image: url('/storage/avatar.jpg')"
            class="h-16 w-16 bg-cover border rounded-full"></div>
    
        <div class="flex items-center">
            <div class="text-sm px-4">
                <h2>
                    @if ($chat->first_user_id === $user->id)
                        {{ $chat->last_user->name }}
                    @else
                        {{ $chat->first_user->name }}
                    @endif  

                </h2>
                <h2 class="text-gray-400">
                    Aktywny(a) teraz
                </h2>
            </div>
        </div>
    </div>
</a>
<div class="px-6 py-3 flex items-center">
    @if ($comment->user->avatar)
    <div class="w-8 h-8 mr-2 bg-cover rounded-full" style="
    background-image: url('/storage/{{$comment->user->avatar}}')" alt=""> 
    </div>       
    @else
    <img class="w-8 h-8 mr-2" src="/storage/avatar.jpg" alt="">
    @endif
    <p class="mx-3 font-medium">
        {{ $comment->user->nickname }}
    </p>

    <p>
        {{ $comment->body }}
    </p>
</div>
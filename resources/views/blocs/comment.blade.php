<div class="px-6 py-3 flex items-center">
    <img class="w-8 h-8 mr-2" src="/storage/avatar.jpg" alt="">

    <p class="mx-3 font-medium">
        {{ $comment->user->nickname }}
    </p>

    <p>
        {{ $comment->body }}
    </p>
</div>
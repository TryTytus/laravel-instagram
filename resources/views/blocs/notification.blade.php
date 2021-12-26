<div class="flex my-4 items-center">
    <img src="/storage/avatar.jpg" class="w-8 h-8" alt="" srcset="">
    <h6 class="font-medium text-sm mx-2">
        {{ $notification->user[0]->nickname }}
    </h6>
    <p class="text-sm">
        @if ($notification->type === 'newpost')
            Nowy post
            <a class="ml-2 text-blue-400"
             href="/thispost/{{ $notification->post_id }}">
                Zobacz
            </a>
        @else
            Zaczął cię obserwować
            <a class="ml-2 text-blue-400"
             href="/profile/{{ $notification->user[0]->nickname }}">
                Zobacz
            </a>
        @endif
    </p>
</div>
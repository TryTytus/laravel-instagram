<div id="gr" class="grid items-end overflow-y-auto scrolll">

    @foreach ($messages as $message)
        @if ($message->author === $user->id)
            <div class="bg-gray-200 p-3 mx-12 my-1 border-2 rounded-3xl justify-self-end">
                {{ $message->body }}
            </div>
        @else
            <div class="p-3 mx-12 my-1 border-2 rounded-3xl justify-self-start">
                {{ $message->body }}
            </div>
        @endif

    @endforeach
</div>
<script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    var user = {{ $user->id }}
    var pusher = new Pusher('eec9c85f3e28b257b209', {
        cluster: 'eu'
    });
    var updateScroll = () => {
        var objDiv = document.getElementById("gr");
        objDiv.scrollTop = objDiv.scrollHeight;
    }
    var channel = pusher.subscribe('mychanel{{ $chat->id }}');
    channel.bind('my-event', function(data) {
        if (data.author == user) {
            $('#gr').append(`
            <div class="p-3 mx-12 my-1 border-2 rounded-3xl justify-self-end bg-gray-200">
                ${data.message}
            </div>
            `);
            updateScroll();
        } else {
            $('#gr').append(`
            <div class="p-3 mx-12 my-1 border-2 rounded-3xl justify-self-start">
                ${data.message}
            </div>
            `);
            updateScroll();
        }
    });
</script>

<style>
    #gr {
        max-height: 70vh;
        grid-template-rows: repeat(6vh, 3);
    }

</style>

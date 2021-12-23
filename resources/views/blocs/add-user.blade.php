<a href="/create_chat/{{ $userr->id }}">
    <div class="flex px-4 my-2">
        <div 
            style="background-image: url('/storage/avatar.jpg')"
            class="h-8 w-8 bg-cover border rounded-full"></div>
    
        <div class="flex items-center">
            <div class="text-sm px-2">
                <h2>
                    {{ $userr->name }}

                </h2>
                <h2 class="text-gray-400">
                        
                </h2>
            </div>
        </div>
    </div>
</a>
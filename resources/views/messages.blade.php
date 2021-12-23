@extends('layouts.dashboard')

@section('content')

    <main id="main" class="m-auto my-4 border border-gray-300 rounded-md lg:w-4/6 bg-white">
        <div class="">
            <div x-data="{ open: false }" class="flex justify-center items-center h-16 border-b border-gray-300">
                <h1 class="font-medium">
                    {{ $user->nickname }}
                </h1>
                <button @click="open = !open " class="relative left-2">
                    <svg aria-label="Nowa wiadomość" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M12.202 3.203H5.25a3 3 0 00-3 3V18.75a3 3 0 003 3h12.547a3 3 0 003-3v-6.952" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M10.002 17.226H6.774v-3.228L18.607 2.165a1.417 1.417 0 012.004 0l1.224 1.225a1.417 1.417 0 010 2.004z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="16.848" x2="20.076" y1="3.924" y2="7.153"></line></svg>
                </button>
                <div id="popup" class="bg-white z-20 left-1/2 top-1/2 absolute rounded-2xl font-medium" x-show="open">
                    <div class="flex p-4 mx-auto justify-between border-b border-gray-400">
                        <button @click="open = !open " class="w-8"> 
                            <svg aria-label="Zamknij" class="_8-yf5 " color="#262626" fill="#262626" height="18" role="img" viewBox="0 0 24 24" width="18"><polyline fill="none" points="20.643 3.357 12 12 3.353 20.647" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></polyline><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" x1="20.649" x2="3.354" y1="20.649" y2="3.354"></line></svg>    
                        </button> 
                        <h1>Nowa wiadomość</h1>
                        <h1 class="w-8 text-blue-500">Dalej</h1>
                    </div>
                    <p class="p-4">
                       Propozycje 
                    </p>
                    @foreach ($all_users as $userr)
                        @include('blocs.add-user', $userr)
                    @endforeach
                </div>
                <div class="absolute bg-opacity-70 bg-black z-10 top-0 left-0 w-screen h-screen" x-show="open">  </div>
            </div>
            <h2 class="font-medium text-base px-4 py-2">
                Wiadomości
            </h2>
            <div>
                @foreach ($chats as $chat)
                    @include('blocs.mes-user', $chat)
                @endforeach
            </div>
        </div>
        <div class=" border-l flex flex-col">
            <div class="flex items-center h-16 border-b border-gray-300 font-medium">
                @if (isset($this_chat))
                    @if ($this_chat->first_user_id === $user->id)
                        <img class="ml-8 mr-3 w-10 h-10" src="/storage/avatar.jpg" alt="">
                        <p>
                            {{ $this_chat->last_user->name }}
                        </p>
                    @else
                        <img class="ml-8 mr-3 w-10 h-10" src="/storage/avatar.jpg" alt="">
                        <p>
                            {{ $this_chat->first_user->name }}
                        </p>
                    @endif
                @endif
            </div>
            @if (isset($messages))
                @include('blocs.mes-win', ['messages' => $messages, 'user'=>$user, 'chat'=>$this_chat])

                <div class="mt-auto">
                    <form action="javascript:dupaa();" class="flex justify-center" id="formm">
                        @csrf
                        <input id="mes" type="text" name="message" id="message"
                            class="w-10/12 mb-8 rounded-3xl border-2 border-gray-300 focus:border-transparent">
                        <button id="btn" class="absolute md:ml-60" type="submit">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="#0084FF" d="M2,21L23,12L2,3V10L17,12L2,14V21Z" />
                            </svg>
                        </button>
                    </form>
                </div>
            @else
                <h1 class="m-auto font-medium text-2xl">
                    Znajdź znajomych
                </h1>
            @endif
        </div>
    </main>
    @if (isset($this_chat))
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });
        });
        const dupaa = async () => {
            let message = $('#mes').val();
            let chat =  {{$this_chat->id}};
            let user = {{$user->id}};
            await $.post('/send', {
                message,
                chat,
                user
            });
        }

var objDiv = document.getElementById("gr");
objDiv.scrollTop = objDiv.scrollHeight;



    </script>
    @endif

    <style>
        #popup {
            transform: translate(-50%, -50%);
            width: 30vw;
            height: 60vh;
        }
        #main {
            display: grid;
            height: 90vh;
            grid-template-columns: 1fr 2fr;
        }

        #btn {
            margin-left: 33%;
            margin-top: 0.6rem;
        }

    </style>

@endsection

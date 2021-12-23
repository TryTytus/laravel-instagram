{{-- heart --}}
<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1"
    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <symbol id="icon-heart" viewBox="0 0 32 32">
            <path
                d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z">
            </path>
        </symbol>
    </defs>
</svg>

<div x-data="{
     isliked: {{ $post->isliked }} == 1 ? true : false,
     toggle,
     likes: {{ $post->likes }} 
     }" id="{{ $post->id }}" class="p-4 bg-gray-100">
    <div class="max-w-xl bg-white border rounded-sm">
        <div class="flex items-center px-4 py-3">
            <a href="/profile/{{ $post->nickname }}">
                <img class="w-8 h-8 rounded-full" src="./storage/avatar.jpg" />
            </a>
            <div class="ml-3 ">
                <span class="block text-sm antialiased font-semibold leading-tight">
                    {{ $post->nickname }}
                </span>
                {{-- <span class="block text-xs text-gray-600">Asheville, North Carolina</span> --}}
            </div>
        </div>
        <div>
            <button id="postt" ondblclick="document.querySelector('#like{{ $post->id }}').click() ">
                <svg class="absolute text-white opacity-0 fill-current" id="icon{{ $post->id }}">
                    <use xlink:href="#icon-heart"></use>
                </svg>
                <img class="select-none" src="<?= '/storage/' . $post->img ?>" />
            </button>
        </div>
        <div class="flex items-center justify-between mx-4 mt-3 mb-2">
            <div class="flex gap-5">
                <template x-if="!isliked">
                    <button id="like{{ $post->id }}"
                        @click="toggle(isliked, {{ $post->id }}); isliked = !isliked; likeimg( {{ $post->id }} , isliked); likes++">
                        <svg id="dis{{ $post->id }}" fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                            <path
                                d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                            </path>
                        </svg>
                    </button>
                </template>

                <template x-if="isliked">
                    <button
                        @click="toggle(isliked, {{ $post->id }}); isliked = !isliked; likeimg($el, isliked); likes--"
                        x-show="isliked">
                        <svg id="like{{ $post->id }}" aria-label="Nie lubię" color="#ed4956" fill="#ed4956"
                            height="24" role="img" viewBox="0 0 48 48" width="24">
                            <path
                                d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                            </path>
                        </svg>
                    </button>
                </template>
                <a href="/thispost/{{ $post->id }}">
                <svg fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                    <path clip-rule="evenodd"
                        d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z"
                        fill-rule="evenodd"></path>
                </svg>
                </a>
                <a href="/sendmes/{{ $post->nickname }}">
                    <svg fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                        <path
                            d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="flex">
                <svg fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                    <path
                        d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z">
                    </path>
                </svg>
            </div>
        </div>
        <div class="flex text-sm">
            <p class="ml-4 mr-2 mb-1 font-semibold">{{ $post->nickname }} </p>
            <p class="font-sans">{{ $post->title }}</p>
        </div>
        <div class="mx-4 mb-4 text-sm font-semibold" x-text="likes + ' likes'"></div>
        <form method="POST" action="/comment/{{ $post->id }}" class="-my-1 border-t border-gray-200 flex">
            @csrf
            <textarea id="textarea" placeholder="Dodaj komentarz..." rows="1"
                class="w-5/6 text-sm py-4 px-3 bg-transparent resize-none border-0" name="body"></textarea>
            <button type="submit" class="m-auto font-medium text-sm text-blue-400">
                Opublikuj
            </button>
        </form>
    </div>
</div>


<script>
    var likeimg = async (element, can) => {
        if (can == 1) {
            let el = document.querySelector(`#icon${element}`);
            el.classList.add("likean");
            await setTimeout(() => {
                el.classList.remove("likean");
            }, 1200);
        }
    }

    var toggle = async (isliked, num) => {
        if (isliked == 1) {
            await fetch('/dislikes/' + num);
        } else {
            await fetch('/likes/' + num);
        }
    }
</script>

<style>
    #icon{{ $post->id }} {
        opacity: 0;
        position: absolute;
        display: inline-block;
        width: 128px;
    }

    @keyframes like-heart-animation {

        0%,
        to {
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        15% {
            opacity: 0.9;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }

        30% {
            -webkit-transform: scale(0.95);
            transform: scale(0.95);
        }

        45%,
        80% {
            opacity: 0.9;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    .likean {
        animation: 2s like-heart-animation ease-in-out forwards;
    }

    #postt {
        margin: auto;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    #textarea:focus {
        outline: none !important;
        border: 0px;
        box-shadow: 0 0 20px #ffffff;
    }

</style>

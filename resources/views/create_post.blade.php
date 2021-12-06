@extends('layouts.form')

@section('form')
    <h1 class="text-2xl font-bold mb-3">Dodaj post</h1>
    <form action="/create" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center">
        @csrf

        @if($error)
            <h1 class="text-red-500">Mama cię nie kocha tępy chuju bo nawet formularza nie potrafisz uzupełnić</h1>
        @endif

        <div class="">
            <img id="img" class="rounded-sm w-30 mb-2" src="" alt="">
            <a class="rem hidden text-red-500" href="/create">remove</a>
        </div>
        <div id="add" class='flex items-center justify-center w-80'>
            <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-blue-300 group'>
                <div class='flex flex-col items-center justify-center pt-7'>
                  <svg class="w-10 h-10 text-blue-400 group-hover:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  <p class='lowercase text-sm text-gray-400 group-hover:text-blue-500 pt-1 tracking-wider'>Dodaj zdjęcie</p>
                </div>
              <input id="img" name="img" type='file' onchange="previewFile()" class="hidden" required/>
            </label>
        </div>
        
        <input name="title" autofocus required
            class="text-xs w-full my-4 rounded border bg-gray-100 border-gray-300 px-2 py-2 focus:outline-none focus:border-gray-400 active:outline-none"
            id="title" placeholder="Tytuł" type="text">
        <button class="mb-4 text-sm text-center bg-blue-500 text-white py-2 rounded font-medium" type="submit">
            Save
        </button>
    </form>

    <script>
        function previewFile() {
            var preview = document.querySelector('#img');
            var label = document.querySelector('#add');
            var remove = document.querySelector('.rem');
            var file = document.querySelector('input[type=file]').files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
                remove.style.display = 'block';
                label.style.display = 'none';
            } else {
                preview.src = "";
            }
        }
    </script>
@endsection

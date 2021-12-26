
@extends('layouts.dashboard')

@section('content')

<main class="bg-gray-100 bg-opacity-25">
    <div class="lg:w-8/12 lg:mx-auto mb-8">
  
      <header class="flex flex-wrap items-center p-4 md:py-8">
  
        <div class="md:w-3/12 md:ml-16">
          <!-- profile image -->

          @if ($profile->avatar)
          <img id="blah" class="w-20 h-20 md:w-40 md:h-40 object-cover rounded-full
          border-2 border-pink-600 p-1" src="/storage/{{$profile->avatar}}" alt="profile">
          @else  
          <img id="blah" class="w-20 h-20 md:w-40 md:h-40 object-cover rounded-full
                       border-2 border-pink-600 p-1" src="/storage/avatar.jpg" alt="profile">
          @endif
        </div>
  
        <!-- profile meta -->
        <div class="w-8/12 md:w-7/12 ml-4">
          <div class="md:flex md:flex-wrap md:items-center mb-4">
            <h2 class="text-3xl inline-block font-light md:mr-2 mb-2 sm:mb-0">
              {{ $profile->nickname }}
            </h2>
  
            <!-- badge -->
            <span class="inline-block fas fa-certificate fa-lg text-blue-500 
                                 relative mr-6 text-xl transform -translate-y-2" aria-hidden="true">
              <i class="fas fa-check text-white text-xs absolute inset-x-0
                                 ml-1 mt-px"></i>
            </span>
          @if ($isme)
            <form method="POST"  enctype="multipart/form-data" action="/changeavatar">
              @csrf
              <label class=" px-2 py-1 border bg-white
              font-semibold text-sm rounded  text-center" for="imgInp">
                  Zmień zdjęcie profilowe
                <input id="imgInp" onchange="submit()" type="file" class="hidden" name="imgInp" required>
              </label>

              <button id="subm" class="bg-blue-500 px-2 py-1 hidden
              text-white font-semibold text-sm rounded text-center mt-4 absolute"
               type="submit">Potwierdź</button>
            </form>
          @else
            <!-- follow button -->
            <button id="follow" class="bg-blue-500 px-2 py-1 hidden
                          text-white font-semibold text-sm rounded text-center 
                          ">Follow</button>
            <!-- unfollow button -->
            <button id="unfollow" class=" px-2 py-1 border hidden bg-white
                         font-semibold text-sm rounded  text-center 
                        ">Following</button>
          @endif
          </div>
  
          <!-- post, following, followers list for medium screens -->
          <ul class="hidden md:flex space-x-8 mb-4">
            <li>
              <span class="font-semibold">
                  {{ $profile->profile->post_num }}
              </span>
              posty
            </li>
  
            {{-- <li>
              <span class="font-semibold">null</span>
              followers
            </li>
            <li>
              <span class="font-semibold">null</span>
              following
            </li> --}}
          </ul>
  
          <!-- user meta form medium screens -->
          {{-- <div class="hidden md:block">
            <h1 class="font-semibold">Mr Travlerrr...</h1>
            <span>Travel, Nature and Music</span>
            <p>Lorem ipsum dolor sit amet consectetur</p>
          </div> --}}
  
        </div>
  
        <!-- user meta form small screens -->
        <div class="md:hidden text-sm my-2">
          <h1 class="font-semibold">Mr Travlerrr...</h1>
          <span>Travel, Nature and Music</span>
          <p>Lorem ipsum dolor sit amet consectetur</p>
        </div>
  
      </header>
  
      <!-- posts -->
      <div class="px-px md:px-3">
  
        <!-- user following for mobile only -->
        <ul class="flex md:hidden justify-around space-x-8 border-t 
                  text-center p-2 text-gray-600 leading-snug text-sm">
          <li>
            <span class="font-semibold text-gray-800 block">
                {{ $profile->profile->post_num }}
            </span>
            posts
          </li>
  
          {{-- <li>
            <span class="font-semibold text-gray-800 block">40.5k</span>
            followers
          </li>
          <li>
            <span class="font-semibold text-gray-800 block">302</span>
            following
          </li> --}}
        </ul>
  
        <!-- insta freatures -->
        <ul class="flex items-center justify-around md:justify-center space-x-12  
                      uppercase tracking-widest font-semibold text-xs text-gray-600
                      border-t">
          <!-- posts tab is active -->
          <li class="md:border-t md:border-gray-700 md:-mt-px md:text-gray-700">
            <a class="inline-block p-3" href="#">
              <i class="fas fa-th-large text-xl md:text-xs"></i>
              <span class="hidden md:inline">posty</span>
            </a>
          </li>
        </ul>
        @include('blocs.profile_posts', ['posts' => $profile->posts])

      </div>
    </div>
  </main>

<script>
  var id = {{ $profile->id }};
  var isfollowing = {{ $isfollowing }};

  $( window ).ready(() => {
    if (isfollowing === 1) {
      $('#unfollow').css('display', 'block');
    } else {
      $('#follow').css('display', 'block');
    }
  });

   $('#follow').click(async () => {
    await $.get(`/follow/${id}`);
    $('#follow').css('display', 'none');
    $('#unfollow').css('display', 'block');
  });

  $('#unfollow').click(async () => {
    await $.get(`/unfollow/${id}`);
    $('#follow').css('display', 'block');
    $('#unfollow').css('display', 'none');
  });

  imgInp.onchange = evt => {
  const [file] = imgInp.files
  $('#subm').css('display','block');
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}

</script>

  @endsection

        <!-- flexbox grid -->
        <div class="flex flex-wrap -mx-px md:-mx-3">
            <!-- column -->
            @foreach ($posts as $post)
                

            <div class="w-1/3 p-px md:px-3">
              <!-- post 1-->
              <a href="/thispost/{{ $post->id }}">
                <article class="post bg-gray-100 text-white relative pb-full md:mb-6">
                  <!-- post image-->
                  {{-- <img width="200px" height="200px" class="w-full h-full absolute left-0 top-0 object-cover" src="/storage/{{ $post->img }}" alt="image"> --}}
                    {{-- <img src="/storage/{{ $post->img }}" alt="" class="w-full h-full relative left-0 top-0 object-cover"> --}}
                <div style="background-image: url('/storage/{{ $post->img }}')" class="w-full h-80 bg-cover"></div>
                  <i class="fas fa-square absolute right-0 top-0 m-1"></i>
                  <!-- overlay-->
                  <div class="hover:opacity-100 overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
                                    left-0 top-0 opacity-0">
                    <div class="flex justify-center items-center 
                                        space-x-4 h-full">
                      <span class="p-2 flex">
                        <svg class="mx-2" style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                        </svg>
                        {{ $post->likes }}
                      </span>
    
                      {{-- <span class="p-2">
                        <i class="fas fa-comment"></i>
                        2,909
                      </span> --}}
                    </div>
                  </div>
    
                </article>
              </a>
            </div>
            @endforeach
    
          </div>
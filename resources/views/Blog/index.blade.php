<x-app>
    <div>
        <h1 class="text-center p-2 text-sky-400 text-2xl">Dairy Reflection</h1>
        <div class="flex justify-between px-3 ">
            @include('components._search')
            @auth
            <a class="text-xl bg-gray-300 w-10 h-10 rounded-full flex justify-center items-center m-2 text-center " href="/food/create"> <i class="fa-solid fa-plus"></i></a>
            @endauth
        </div>
        <div class="p-1">
            <div class="flex justify-center px-8">
                @unless (count($blogs) == 0)
                @foreach ($blogs as $blog)
                <div class="flex justify-center ">
                    <img class="rounded-xl bg-white w-72  h-36 border-solid mr-16 border-4 border-sky-500"
                        src="{{ $blog->logo ? asset('storage/' . $blog->logo) : asset('image/coc8.jpg') }}" alt="">
                </div>
                <div class="w-1/2 h-40 flex flex-col justify-between">
                    <h1>{{ $blog->title }}</h1>
                    <p class="text-sm">{{ $blog->blog }}</p>
                    <div class="p-2 flex justify-between">
                        <i> published on 23/12/2002</i>
                        <i> Author : : kihara Nelson</i>
                    </div>
                </div>

            </div>
            <hr class="mx-8 border-black">
        </div>
        @endforeach
        @else
          <p>No Foods found</p>
        @endunless


      </div>
      {{-- <div class=" p-1">
        {{ $blog->links() }}
      </div> --}}
    </div>
  </x-app>
{{-- <x-app>
    <div>



        <div class="p-1">
            <div class="flex flex-row-reverse justify-center px-8">
                <div class="flex justify-center ">
                    <img class="rounded-xl bg-white w-72  h-36 border-solid ml-16 border-4 border-sky-500"
                        src="{{ asset('image/coc8.jpg') }}" alt="">
                </div>
                <div class="w-1/2 h-40 flex flex-col justify-between">
                    <p class="text-sm">On the other hand, we denounce with righteous indignation and dislike men who are
                        so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that
                        they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to
                        those who fail in their duty through weakness of will, which is the same as saying through
                        shrinking from toil and pain. s</p>
                    <div class="p-2 flex justify-between">
                        <i> published on 23/12/2002</i>
                        <i> Author : : kihara Nelson</i>
                    </div>
                </div>

            </div>
            <hr class="mx-8 border-black">
        </div>

        <div class="p-1">
            <div class="flex justify-center px-8">
                <div class="flex justify-center ">
                    <img class="rounded-xl bg-white w-72  h-36 border-solid mr-16 border-4 border-sky-500"
                        src="{{ asset('image/coc8.jpg') }}" alt="">
                </div>
                <div class="w-1/2 h-40 flex flex-col justify-between">
                    <p class="text-sm">On the other hand, we denounce with righteous indignation and dislike men who are
                        so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that
                        they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to
                        those who fail in their duty through weakness of will, which is the same as saying through
                        shrinking from toil and pain. s</p>
                    <div class="p-2 flex justify-between">
                        <i> published on 23/12/2002</i>
                        <i> Author : : kihara Nelson</i>
                    </div>
                </div>

            </div>
            <hr class="mx-8 border-black">
        </div>

        <div class="p-1">
            <div class="flex flex-row-reverse justify-center px-8">
                <div class="flex justify-center ">
                    <img class="rounded-xl bg-white w-72  h-36 border-solid ml-16 border-4 border-sky-500"
                        src="{{ asset('image/coc8.jpg') }}" alt="">
                </div>
                <div class="w-1/2 h-40 flex flex-col justify-between">
                    <p class="text-sm">On the other hand, we denounce with righteous indignation and dislike men who are
                        so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that
                        they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to
                        those who fail in their duty through weakness of will, which is the same as saying through
                        shrinking from toil and pain. s</p>
                    <div class="p-2 flex justify-between">
                        <i> published on 23/12/2002</i>
                        <i> Author : : kihara Nelson</i>
                    </div>
                </div>

            </div>
            <hr class="mx-8 border-black">
        </div>
    </div>
</x-app> --}}

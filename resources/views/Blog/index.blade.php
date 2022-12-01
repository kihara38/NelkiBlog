<x-app>
    <div>
        <h1 class="text-center p-2 text-sky-400 text-2xl">Dairy Reflection</h1>
        <div class="flex justify-between px-3 ">
            <div id='Loader'></div>

            @include('components._search')
            @auth
                <a class="text-xl bg-gray-300 w-10 h-10 rounded-full flex justify-center items-center m-2 text-center "
                    href="/blog/create"> <i class="fa-solid fa-plus"></i></a>
            @endauth
        </div>

        @unless(count($blogs) == 0)
            @foreach ($blogs as $blog)
                <div class="p-1">
                    <div class="flex-col md:flex md:flex-row md:justify-center items-center px-3 even:flex  p-1">
                        <div class="flex justify-center even:mx-16 odd:mr-0">
                            <img class="rounded-xl bg-white w-72  h-36 border-solid  border-4 border-sky-500"
                                src="{{ $blog->logo ? asset('storage/' . $blog->logo) : asset('image/coc8.jpg') }}"
                                alt="">
                        </div>
                        <div class="md:w-1/2 h-40 flex flex-col justify-between items-center">
                            <a href="/blog/{{ $blog->id }}">
                                <h1 class="text-teal-300">{{ $blog->title }}</h1>
                            </a>
                            <p class="text-sm">{{ $blog->blog }}</p>
                            <div class="p-1 md:p-3 flex justify-between">
                                <i class="text-xs md:text-lg pr-4"> published on {{ $blog->created_at }}</i>
                                <div class="flex text-xs md:text-lg">
                                    <p class="px-2"><i class="fa-solid fa-thumbs-up"></i>20 </p>
                                    <p class="px-2"><i class="fa-solid fa-thumbs-down"></i>10 </p>
                                </div>
                                <i class="text-xs md:text-lg pl-4"> Author : : kihara Nelson</i>
                            </div>
                        </div>
                    </div>
                    <hr class="mx-8 border-black">
                </div>
            @endforeach
        @else
            <p>No Blogs found</p>
        @endunless


    </div>
    <div class=" p-1">
        {{ $blogs->links() }}
    </div>
    </div>
</x-app>

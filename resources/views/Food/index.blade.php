<x-app>
    <div>
        <div class="flex justify-between px-3 ">
            @include('components._search')
            @auth
                <a class="text-xl bg-gray-300 w-10 h-10 rounded-full flex justify-center items-center m-2 text-center "
                    href="/food/create"> <i class="fa-solid fa-plus"></i></a>
            @endauth


        </div>
        <div class="flex flex-wrap justify-between shadow-md md:px-5">
            @unless(count($foods) == 0)
                @foreach ($foods as $food)
                    <div
                        class="flex flex-col flex-wrap rounded-2xl bg-gray-400  items-center mx-4 mt-2 md:w-48 w-40 md:h-52 h-44  ">
                        <img class="rounded-2xl md:w-48 w-44   md:h-44 h-36"
                            src="{{ $food->logo ? asset('storage/' . $food->logo) : asset('image/dragon.png') }}"alt="">
                        <a href="/food/{{ $food->id }}">
                            <p>{{ $food->title }}</p>
                        </a>

                    </div>
                @endforeach
            @else
                <p>No Foods found</p>
            @endunless


        </div>
        <div class=" p-1">
            {{ $foods->links() }}
        </div>
    </div>
</x-app>

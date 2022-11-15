<x-app>
    <div>
        <div class="flex justify-between px-3 ">

            @include('components._search')
            @auth
                <a class="text-xl bg-gray-300 w-10 h-10 rounded-full flex justify-center items-center m-2 text-center "
                    href="/cocktail/create"> <i class="fa-solid fa-plus"></i></a>
            @endauth
        </div>
        <div class="grid grid-cols-5 gap-0.5  gap-y-0.5  shadow-md px-5">
            @unless(count($cocktails) == 0)
                @foreach ($cocktails as $cocktail)
                    <div class="grid  rounded-2xl bg-gray-400  items-center mx-4 mt-2 w-64 h-52  even:h-72 even:w-64">
                        <img class="rounded-2xl w-64   h-44 even:h-80 even:w-64"
                            src="{{ $cocktail->logo ? asset('storage/' . $cocktail->logo) : asset('image/dragon.png') }}"alt="">
                        <a href="/cocktail/{{ $cocktail->id }}">
                            <p class="text-center">{{ $cocktail->title }}</p>
                        </a>

                    </div>
                @endforeach
            @else
                <p>No Cocktails found</p>
            @endunless


        </div>
        <div class=" p-1">
            {{ $cocktails->links() }}
        </div>
    </div>
</x-app>

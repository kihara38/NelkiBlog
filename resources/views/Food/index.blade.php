<x-app>
    <div>
      {{-- @include('partials._search') --}}
      <div class="flex flex-wrap justify-between shadow-md px-5">
        @unless (count($foods) == 0)
        @foreach ($foods as $food)
          <div class="flex flex-col rounded-2xl bg-gray-400  items-center mx-4 mt-2 w-48 h-52  ">
            <img class="rounded-2xl w-48   h-44" src="{{$food->logo ? asset('storage/' . $food->logo) : asset('image/dragon.png') }}"alt="">
            <a href="/cocktail/{{ $food->id }}"><p>{{ $food->title }}</p></a>

          </div>
        @endforeach
        @else
          <p>No Foods found</p>
        @endunless


      </div>
      {{-- <div class=" p-1">
        {{ $cocktails->links() }}
      </div> --}}
    </div>
  </x-app>

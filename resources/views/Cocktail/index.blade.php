<x-app>
    <div>
      @include('components._search')
      <div class="flex flex-wrap justify-between shadow-md px-5">
        @unless (count($cocktails) == 0)
        @foreach ($cocktails as $cocktail)
          <div class="flex flex-col rounded-2xl bg-gray-400  items-center mx-4 mt-2 w-48 h-52  ">
            <img class="rounded-2xl w-48   h-44" src="{{$cocktail->logo ? asset('storage/' . $cocktail->logo) : asset('image/dragon.png') }}"alt="">
            <a href="/cocktail/{{ $cocktail->id }}"><p>{{ $cocktail->title }}</p></a>

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

<x-app>
    <div class="px-32">

      <div class="flex justify-center">
        <a class="text-xl bg-gray-300 w-10 h-10 rounded-full flex justify-center items-center m-2 text-center " href="/cocktail"> <i class=" fa-solid fa-angle-left"></i></a>

        <h1 class="flex items-center text-3xl text-sky-500 p-2">{{ $cocktail->title }}</h1>
      </div>



      <div class="flex p-4 justify-center">
        <img class="rounded-xl bg-white w-80  h-60 border-solid mr-16 border-4 border-sky-500" src="{{$cocktail->logo ? asset('storage/' . $cocktail->logo) : asset('image/dragon.png') }}" alt="">
        <x-ingredients :ingredientsCsv="$cocktail->ingredients"/>
      </div>
      <div class="flex flex-col">
        <h3 class="text-sky-400 text-center">RECIPE</h3>
      <p class="mx-32">{{ $cocktail->procedure }}</p>
      <i class="mx-32 flex justify-end text-black">{{ $cocktail->created_at }}</i>
    </div>
    <div class="mt-1 p-2 flex space-x-6">
      <a href="/cocktail/{{ $cocktail->id }}/edit ">
      <i class="fa-solid fa-pencil"></i>Edit</a>

      <form action="/cocktail/{{ $cocktail->id }}" method="post">
      @csrf
      @method('DELETE')
      <button class="text-red-500"><i class="fa-solid fa-trash">Delete</i></button>
      </form>

    </div>
    </div>

  </x-app>

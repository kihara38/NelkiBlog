
<x-app >
    <div class="grid grid-cols-5">
@unless (count($cocktails) == 0)
@foreach ($cocktails as $cocktail)
<div class="w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-end px-4 pt-4">
        <x-dropdown  >
            <x-slot name="trigger">
                <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                    <span class="sr-only">Open dropdown</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                </button>
            </x-slot>

            <x-slot name="content">


                    <x-dropdown-link class="hidden z-10 w-44 text-base list-none bg-gray-800 rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                         <ul class="py-1" aria-labelledby="dropdownButton">
                            <li>
                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                            </li>
                            </ul>
                    </x-dropdown-link>

            </x-slot>
        </x-dropdown>





    </div>
    <div class="flex flex-col items-center pb-10">
        <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{$cocktail->logo ? asset('storage/' . $cocktail->logo) : asset('image/dragon.png') }}" alt="Bonnie image"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
        <div class="flex mt-4 space-x-3 md:mt-6">
            <form action="/auth/cocktail/{{ $cocktail->id }}" method="post">
                @csrf
                @method('DELETE')
                <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i class="fa-solid fa-trash pr-3 "></i>Delete</button>
            </form>
            <a href="#" class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
        </div>
    </div>
</div>
@endforeach
    @else
      <p>No Cocktails found</p>
    @endunless
</div>
</x-app>

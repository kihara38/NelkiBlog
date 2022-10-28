
<x-app >
    <div class="grid grid-cols-5">
@unless (count($blogs) == 0)
@foreach ($blogs as $blog)
<div class="w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">

    <div class="flex flex-col items-center py-3">
        <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="{{$blog->logo ? asset('storage/' . $blog->logo) : asset('image/dragon.png') }}" alt="Bonnie image"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{$blog->user->name}}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{$blog->title}}</span>
        <div class="flex mt-4 space-x-3 md:mt-6">
            <form action="/auth/blog/{{ $blog->id }}" method="post">
                @csrf
                @method('DELETE')
                <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline hover:text-red-600"><i class="fa-solid fa-trash pr-3 "></i>Delete</button>
            </form>
            <p>{{$blog->id}}</p>
        </div>
    </div>
</div>
@endforeach
    @else
      <p>No Cocktails found</p>
    @endunless
</div>
</x-app>


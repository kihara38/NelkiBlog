<x-app>
    <div class="px-32">

      <div class="flex justify-center">
        <a class="text-xl bg-gray-300 w-10 h-10 rounded-full flex justify-center items-center m-2 text-center " href="/foods"> <i class=" fa-solid fa-angle-left"></i></a>

        <h1 class="flex items-center text-3xl text-sky-500 p-2">{{ $blog->title }}</h1>
      </div>

      <div class="bg-gray-200 p-4 rounded-xl">
        <div class="flex p-4 justify-center">
         <img class=" mb-4 h-32 rounded-xl bg-white w-80  border-solid mr-16 border-4 border-sky-500" src="{{   $blog->logo ? asset('storage/' . $blog->logo) : asset('image/coc8.jpg') }}" alt="">
        </div>
        <p>{{$blog->blog}}</p>
        <div class="p-2 flex justify-between">
            <i> published on {{ $blog->created_at }}</i>
            <i> Author : : {{$blog->user->name}}</i>
        </div>
      </div>





    <div class="mt-1 p-2 flex space-x-6">
     @can('update',$blog)
      <a href="/blog/{{ $blog->id }}/edit ">
      <i class="fa-solid fa-pencil"></i>Edit</a>

      <form action="/blog/{{ $blog->id }}" method="post">
      @csrf
      @method('DELETE')
      <button class="text-red-500"><i class="fa-solid fa-trash">Delete</i></button>
      </form>
     @endcan

    </div>
    </div>

  </x-app>

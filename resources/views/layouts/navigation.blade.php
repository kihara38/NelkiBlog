<nav class="flex items-center bg-gray-700 p-3 flex-wrap">
    <div class="flex w-full justify-evenly">
        <a href="/"><img class="w-12" src="{{asset('image/logo.png')}}" alt="" class="logo" /></a>
        <a
        href="#"
        class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-sky-400 hover:text-white"
      >
        <span>Home</span>
      </a>
      <a
        href="#"
        class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-sky-400 hover:text-white"
      >
        <span>About</span>
      </a>
      <a
        href="{{ __('blog') }}"
        class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-sky-400 hover:text-white"
      >
        <span>Blogs</span>
      </a>
      <a
        href="#"
        class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-sky-400 hover:text-white"
      >
        <span>Gallery</span>
      </a>
      <a
        href="#"
        class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-sky-400 hover:text-white"
      >
        <span>COCKTAILS</span>
      </a>
      <a
        href="#"
        class="lg:w-auto w-full px-3 py-1 rounded text-gray-400 items-center justify-center hover:bg-sky-400 hover:text-white"
      >
        <span>FOOD</span>
      </a>
      <ul class="flex space-x-6 mr-6 text-lg text-yellow-100">
        @auth
        <li>
          <span class="font-bold uppercase">
            Welcome {{auth()->user()->name}}
          </span>
        </li>
        <li>
          <form class="inline" method="POST" action="/logout">
            @csrf
            <button type="submit">
              <i class="fa-solid fa-door-closed"></i> Logout
            </button>
          </form>
        </li>
        @else
        <li>
          <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
        </li>
        <li>
          <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
        </li>
        @endauth
      </ul>
    </div>
  </nav>

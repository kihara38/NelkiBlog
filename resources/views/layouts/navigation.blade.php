<nav class="flex items-center bg-gray-700 p-3 flex-wrap">
    <div class="flex w-full justify-evenly">
        <a href="{{ __('/') }}"><img class="w-12" src="{{asset('image/logo.png')}}" alt="" class="logo" /></a>
        <a
        href="{{ __('/') }}"
        class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-blue-400"
      >
        <span><i class="fa-solid fa-house pr-2"></i>Home</span>
      </a>
      <a
        href="#"
        class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-blue-400"
      >
        <span><i class="fa-solid fa-user pr-2"></i>About</span>
      </a>
      <a
        href="{{ __('blog') }}"
        class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-blue-400"
      >
        <span><i class="fa-solid fa-blog pr-2"></i>Blogs</span>
      </a>
      <a
        href="#"
        class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-blue-400"
      >
        <span><i class="fa-solid fa-image pr-2"></i>Gallery</span>
      </a>
      <a
        href="{{ __('cocktails') }}"
        class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-blue-400"
      >
        <span><i class="fa-solid fa-martini-glass-citrus pr-2"></i>Cocktails</span>
      </a>
      <a
        href="{{ __('foods') }}"
        class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-blue-400"
      >
        <span><i class="fa-solid fa-bowl-rice pr-2"></i></i>Food</span>
      </a>

      <ul class="flex  text-lg text-yellow-100">
        @auth
     <x-dropdown  width="48">
            <x-slot name="trigger">
                <button
                    class="flex items-center text-sm font-medium text-gray-300 hover:text-gray-200 hover:border-gray-300 focus:outline-none focus:text-gray-300 focus:border-gray-300 transition duration-150 ease-in-out">
                    <div>{{auth()->user()->name}}</div>

                    <div class="ml-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
        @else
        <li class="pr-3">
          <a href="/register" class="text-sm hover:text-teal-400"><i class="fa-solid fa-user-plus pr-2"></i> Register</a>
        </li>
        <li>
          <a href="/login" class="text-sm hover:text-teal-400"><i class="fa-solid fa-arrow-right-to-bracket pr-2"></i> Login</a>
        </li>
        @endauth
      </ul>
      <div class="hidden sm:flex sm:items-center sm:ml-6">

    </div>
    </div>
  </nav>

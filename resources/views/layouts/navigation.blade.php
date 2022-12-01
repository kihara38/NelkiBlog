<nav class="bg-gray-700  shadow mb-10">
    <div x-data="{ isOpen: false }" class=" mx-10 py-3 px-12 md:px-12 md:flex md:justify-between md:items-center">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <a href="{{ __('/') }}"><img class="w-12" src="{{ asset('image/logo.png') }}" alt=""
                        class="logo" /></a>
            </div>
            <!-- Mobile menu button -->
            <div class="flex md:hidden">
                <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                    aria-label="toggle menu" @click="isOpen = !isOpen">
                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                        <path fill-rule="evenodd"
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menu, if mobile set to hidden -->
        <div :class="isOpen ? 'show' : 'hidden'" class="md:flex items-center md:block mt-4 md:mt-0">
            <div class="flex flex-col md:flex-row md:ml-6">
                <a href="{{ __('/') }}"
                    class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-blue-400">
                    <span><i class="fa-solid fa-house pr-2"></i>Home</span>
                </a>
                <a href="#"
                    class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-blue-400">
                    <span><i class="fa-solid fa-user pr-2"></i>About</span>
                </a>
                <a href="{{ __('blog') }}"
                    class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-blue-400">
                    <span><i class="fa-solid fa-blog pr-2"></i>Blogs</span>
                </a>
                <a href="#"
                    class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-blue-400">
                    <span><i class="fa-solid fa-image pr-2"></i>Gallery</span>
                </a>
                <a href="{{ __('cocktails') }}"
                    class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-blue-400">
                    <span><i class="fa-solid fa-martini-glass-citrus pr-2"></i>Cocktails</span>
                </a>
                <a href="{{ __('foods') }}"
                    class="lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:text-blue-400">
                    <span><i class="fa-solid fa-bowl-rice pr-2"></i></i>Food</span>
                </a>
            </div>

        </div>
        <ul class="flex  pl-3 text-lg text-yellow-100 items-center justify-center">
            @auth
                <x-dropdown width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-300 hover:text-gray-200 hover:border-gray-300 focus:outline-none focus:text-gray-300 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ auth()->user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
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

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            @else
                <code class="pr-3">
                    <a href="/register" class="text-sm hover:text-teal-400"><i class="fa-solid fa-user-plus pr-2"></i>
                        Register</a>
                </code>
                <code>
                    <a href="/login" class="text-sm hover:text-teal-400"><i
                            class="fa-solid fa-arrow-right-to-bracket pr-2"></i> Login</a>
                </code>
            @endauth
        </ul>
    </div>
</nav>

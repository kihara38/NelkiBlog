<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="image/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-600">

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
            href="#"
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
    <div class="flex justify-center  m-0 ">
        <div class="flex flex-col justify-center items-center p-28">
               <div class="bg-sky-400 w-72 text-center text-xl rounded-t-full h-72 pt-20">
                    <h1>NELKIBLOG</h1>
                    <p class="pt-10">Discover African Taste</p>
                </div>
                <div class="bg-sky-400 mt-4 w-72 h-10 text-center text-xl">
                    <h3>LET RIDE TOGETHER</h3>
                </div>
        </div>
    </div>
    </body>
</html>

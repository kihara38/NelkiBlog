 <x-app>
     <div class="mx-10 min-h-screen">
         <nav class="p-5 mb-12 flex justify-between">
             <code class="text-xl">Developed by Nelki</code>
             <ul class="flex items-center">
                 <li>
                     <i class="fa-solid fa-cloud-moon text-2xl cursor-pointer"></i>
                 </li>
                 <li>
                     <a class="bg-gradient-to-r from-cyan-500 text- to-teal-500 text-white px-4 py-2 border-none rounded-md ml-8"
                         href="#">
                         Resume
                     </a>
                 </li>
             </ul>
         </nav>
         <div class="text-center p-10 py-10">
             <code class=" text-5xl py-2 text-teal-600 font-black dark:text-teal-400 md:text-6xl">
                 Kihara Nelson
             </code>
             <h3 class="text-2xl py-2 dark:text-white md:text-3xl">
                 Developer and designer.
             </h3>
             <p class="text-md py-5 leading-8 text-gray-800 dark:text-gray-200 max-w-xl mx-auto md:text-xl">
                 Freelancer providing services for programming and design content
                 needs. Join me down below and let's get cracking!
             </p>
             <div class="text-5xl flex justify-center gap-16 py-3 text-gray-600 dark:text-gray-400">
                 <div class="wrapper flex flex-col justify-center items-center ">

                     <div
                         class="icon relative cursor-pointer rounded-full text-2xl p-1 m-1 w-8 h-8  flex justify-center items-center flex-col bg-blue-900 twitter">

                         <span><i class="fa-brands fa-twitter"></i></span>
                     </div>
                     <div
                         class="icon relative cursor-pointer rounded-full text-2xl p-1 m-1 w-8 h-8  flex justify-center items-center flex-col bg-blue-900 instagram">

                         <span><i class="fa-brands fa-instagram"></i></span>
                     </div>
                     <div
                         class=" icon relative cursor-pointer rounded-full text-2xl p-1 m-1 w-8 h-8  flex justify-center items-center flex-col bg-blue-900 github">

                         <span><i class="fa-brands fa-github"></i></span>
                     </div>
                     <div
                         class="icon relative cursor-pointer rounded-full text-2xl p-1 m-1 w-8 h-8  flex justify-center items-center flex-col bg-blue-900 discord">

                         <span><i class="fa-brands fa-discord"></i></span>
                     </div>
                 </div>
                 <div
                     class="mx-auto bg-gradient-to-b from-teal-500 rounded-full md:w-80 md:h-80 w-36 h-36 relative overflow-hidden mt-20 ">
                     <img src="{{ asset('image/logo.png') }}" layout="fill" objectFit="cover" />
                 </div>
             </div>
         </div>
     </div>
 </x-app>

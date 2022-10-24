<x-app>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- title -->
            <div>
                <x-input-label for="title" :value="__('Title')" />

                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" placeholder="Example: spamniidhj" value="{{ old('title') }}" required autofocus />

                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <!-- LOGO -->
            <div class="mt-4">
                <x-input-label for="logo" value="Logo" />

                <x-text-input id="logo" class="block mt-1 w-full" type="file" name="logo" :value="old('logo')" required />

                <x-input-error :messages="$errors->get('logo')" class="mt-2" />
            </div>

            <!-- blog -->
            <div class="mt-4">
                <x-input-label for="blog" :value="__('blog')" />

                <x-text-area id="blog" class="block mt-1 w-full"
                                type="text"
                                name="blog"
                                placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,"
                                 required>
                </x-text-area>

                <x-input-error :messages="$errors->get('blog')" class="mt-2" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <a href="/foods" class="underline text-sm text-gray-600 hover:text-gray-900" >
                Back
                </a>

                <x-primary-button class="ml-4 bg-teal-500">
                    {{ __('Create Food') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>

</x-app>

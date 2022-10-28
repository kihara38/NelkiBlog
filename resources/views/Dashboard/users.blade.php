<x-app>
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Product name
                </th>
                <th scope="col" class="py-3 px-6">
                    Color
                </th>
                <th scope="col" class="py-3 px-6">
                    Category
                </th>
                <th scope="col" class="py-3 px-6">
                    Price
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>

        <tbody>

        @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$user->name}}
                </th>
                <td class="py-4 px-6">
                    {{$user->id}}
                </td>
                <td class="py-4 px-6">
                    {{$user->email}}
                </td>
                <td class="py-4 px-6">
                    {{$user->role_as=='1'?'Admin':'User'}}
                </td>
                <td class="py-4 px-6">
                    <form action="/user/{{ $user->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i class="fa-solid fa-trash pr-3 "></i>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
</x-app>

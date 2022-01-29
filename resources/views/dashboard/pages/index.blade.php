<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
                {{ __('Pages') }}
            </h2>
            <a href="{{ route('pages.create') }}" class="px-4 py-2 hover:text-white text-white rounded-md text-base bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500">Add New Page</a>
        </div>
    </x-slot>


    @if (session('message'))
        <div id="notice" class="text-center bg-green-100 text-green-700 p-3">{{ session('message') }}</div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                    <table class="w-full table-auto mb-4">
                        <thead class="bg-green-500 text-white">
                            <tr>
                                <th class="border px-4 py-2 text-center">ID</th>
                                <th class="border px-4 py-2">Name</th>
                                <th class="border px-4 py-2 w-44">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pages as $page)
                                <tr class="bg-green-300 hover:bg-red-500 hover:text-white duration-50">
                                    <td class="border px-4 py-2 text-center">{{ $page->id }}</td>
                                    <td class="border px-4 py-2">{{ $page->name }}</td>
                                    <td class="border px-4 py-2">
                                        <div class="flex items-center justify-center">
                                            <a href="{{ route('pages.edit', $page->id) }}" class="mx-1 hover:bg-black hover:text-white duration-200 leading-none bg-blue-700 text-white px-3 py-2 text-sm rounded-md">Edit</a>
                                            <a target="_blank" href="{{ route('page',$page->slug) }}" class="mx-1 hover:bg-black hover:text-white duration-200 leading-none bg-green-700 text-white px-3 py-2 text-sm rounded-md">View</a>
                                            <form action="{{ route('pages.destroy', $page->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete the location?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="mx-1 hover:bg-black hover:text-white duration-200 leading-none bg-red-700 text-white px-3 py-2 text-sm rounded-md">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="3">No Location Found!</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>

                    <div class="px-4 pb-4">
                        {{ $pages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

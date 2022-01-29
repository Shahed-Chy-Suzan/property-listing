<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
                {{ __('Messages') }}
            </h2>
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
                                <th class="border px-4 py-4">Name</th>
                                <th class="border px-4 py-4">Message</th>
                                <th class="border px-4 py-4 w-44">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($enquires as $enquiry)
                                <tr class="bg-green-300 hover:bg-red-500 hover:text-white duration-50">
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('message.show', $enquiry->id) }}" class=" flex flex-col">{{ $enquiry->name }} <small>{{ $enquiry->email }}</small></a>
                                    </td>
                                    <td class="border px-4 py-2">{{ $enquiry->message }}</td>
                                    <td class="border px-4 py-2">
                                        <div class="flex items-center justify-center">
                                            <a href="{{ route('message.show',$enquiry->id) }}" class="mx-1 hover:bg-black hover:text-white duration-200 leading-none bg-green-700 text-white px-3 py-2 text-sm rounded-md">View</a>

                                            <form action="{{ route('message.destroy', $enquiry->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete the location?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="mx-1 hover:bg-black hover:text-white duration-200 leading-none bg-red-700 text-white px-3 py-2 text-sm rounded-md">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="3">No Message Found!</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                    
                    <div class="px-4 pb-4">
                        {{ $enquires->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

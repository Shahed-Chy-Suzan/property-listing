<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
                {{ __('Message') }}
            </h2>
            <a href="{{ route('message.index') }}" class="px-4 py-2 hover:text-white text-white rounded-md text-base bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500">Back</a>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 mx-auto">
                    <div>
                        <h2>Name: {{ $enquiry->name }}</h2>
                        <h3 class="text-sm font-normal">Email: {{ $enquiry->email }}</h3>
                        <h4 class="text-sm font-normal">Phone: {{ $enquiry->phone }}</h4>
                    </div>
                    <div class="py-2 w-full bg-gray-200 my-5 px-2">
                        {{ $enquiry->message }}
                    </div>
                    <div class="mb-4 hidden" id="reply-box">
                        <div>
                            <label for="reply-message" class="civanoglu-label">Reply</label>
                            <textarea type="text" placeholder="Reply Message" name="reply-message" id="reply-message" class="civanoglu-input"></textarea>
                        </div>
                        <div class="mt-4">
                            <button id="cancel-reply-btn" type="button" class="px-3 py-1 text-white bg-red-800 rounded-md">Cancel</button>
                            <button type="submit" class="px-3 py-1 text-white bg-purple-800 rounded-md">Reply</button>
                        </div>

                    </div>

                    <div class="flex">
                        <button id="reply-box-open" type="button" class="mx-1 hover:bg-black hover:text-white duration-200 leading-none bg-purple-700 text-white px-3 py-2 text-sm rounded-md">Reply</button>

                        <form id="reply-delete-btn" action="{{ route('message.destroy', $enquiry->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="mx-1 hover:bg-black hover:text-white duration-200 leading-none bg-red-700 text-white px-3 py-2 text-sm rounded-md">Delete</button>
                        </form>

                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>

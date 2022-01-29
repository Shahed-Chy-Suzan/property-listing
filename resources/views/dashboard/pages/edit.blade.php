<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Locations') }}
            </h2>

            <div class="min-w-max">
                <a href="{{route('pages.index')}}" class="px-4 py-2 hover:text-white text-white rounded-md text-base bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500">Back</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{route('pages.update', $page->id)}}" method="post" class="p-6 bg-white border-b border-gray-200" enctype="multipart/form-data"> @csrf @method('put')
                    <div class="mb-6">
                        <label class="civanoglu-label" for="name">Name <span class="required-text">*</span></label>
                        <input class="civanoglu-input" type="text" id="name" name="name" value="{{$page->name}}" required>

                        @error('name')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="civanoglu-label" for="slug">Slug <span class="required-text">*</span></label>
                        <input class="civanoglu-input" type="text" id="slug" name="slug" value="{{$page->slug}}" required>

                        @error('slug')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="civanoglu-label" for="content">Content <span class="required-text">*</span></label>
                        <textarea class="civanoglu-input" name="content" id="content" cols="30" rows="10" required>{{$page->content}}</textarea>

                        @error('content')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <button class="btn" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

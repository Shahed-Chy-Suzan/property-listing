<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
                {{ __('Add New Properties') }}
            </h2>
            <a href="{{ route('properties.index') }}"
                class="px-4 py-2 hover:text-white text-white rounded-md text-base bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="m-4">
                    <form action="{{route('properties.store')}}" method="post" class="p-6 bg-white border-b border-gray-200" enctype="multipart/form-data">
                        @csrf
                        <div class="flex -mx-4 mb-6">
                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="name">Title <span class="required-text">*</span></label>
                                <input class="civanoglu-input" type="text" id="name" name="name" value="{{old('name')}}" required>

                                @error('name')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="name_tr">Title - Turkish <span class="required-text">*</span></label>
                                <input class="civanoglu-input" type="text" id="name_tr" name="name_tr" value="{{old('name_tr')}}" required>

                                @error('name_tr')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="civanoglu-label" for="featured_image">Featured Image <span class="required-text">*</span></label>
                            <input class="civanoglu-input" type="file" id="featured_image" name="featured_image" >

                            @error('featured_image')
                                <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="civanoglu-label" for="gallery_images">Gallery images <span class="required-text">*</span><small class="ml-2 lowercase">(multiple image supported)</small></label>
                            <input class="civanoglu-input" type="file" id="gallery_images" name="gallery_images[]" multiple>

                            @error('gallery_images')
                                <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex -mx-4 mb-6">
                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="location_id">Location <span class="required-text">*</span></label>
                                <select class="civanoglu-input" name="location_id" id="location_id" required>
                                    <option value="">Select location</option>
                                    @foreach($locations as $location)
                                        <option {{old('location_id')==$location->id ? 'selected="selected"' : ''}} value="{{$location->id}}">{{$location->name}}</option>
                                    @endforeach
                                </select>

                                @error('location_id')
                                <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="price">Price <span class="required-text">*</span></label>
                                <input class="civanoglu-input" type="number" id="price" name="price" value="{{old('price')}}" required>

                                @error('price')
                                <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="sale">For <span class="required-text">*</span></label>
                                <select class="civanoglu-input" name="sale" id="sale" required>
                                    <option value="">Select type</option>
                                    <option {{old('sale')=='2' ? 'selected="selected"' : '' }} value="2">Rent</option>
                                    <option {{old('sale')=='1' ? 'selected="selected"' : '' }} value="1">Sale</option>
                                    {{-- <option value="2">Rent</option>
                                    <option value="1">Sale</option> --}}
                                </select>

                                @error('sale')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="type">Type <span class="required-text">*</span></label>
                                <select class="civanoglu-input" name="type" id="type" required>
                                    <option value="">Select property type</option>
                                    <option {{old('type')=='3' ? 'selected="selected"' : '' }} value="3">Land</option>
                                    <option {{old('type')=='1' ? 'selected="selected"' : '' }} value="1">Apartment</option>
                                    <option {{old('type')=='2' ? 'selected="selected"' : '' }} value="2">Villa</option>
                                    {{-- <option value="3">Land</option>
                                    <option value="1">Apartment</option>
                                    <option value="2">Villa</option> --}}
                                </select>

                                @error('type')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex -mx-4 mb-6">
                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="drawing_rooms">Drawing rooms</label>
                                <select class="civanoglu-input" name="drawing_rooms" id="drawing_rooms">
                                    <option value="">Select one</option>
                                    @for($x = 1; $x <= 6; $x++)
                                        <option {{old('drawing_rooms')==$x ? 'selected="selected"' : '' }} value="{{$x}}">{{$x}}</option>
                                    @endfor
                                </select>

                                @error('drawing_rooms')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="bedrooms">Bedrooms</label>
                                <select class="civanoglu-input" name="bedrooms" id="bedrooms">
                                    <option value="">Select Bedrooms</option>
                                    @for($x = 1; $x <= 6; $x++)
                                        <option {{old('bedrooms')==$x ? 'selected="selected"' : '' }} value="{{$x}}">{{$x}}</option>
                                    @endfor
                                    {{-- <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option> --}}
                                </select>

                                @error('bedrooms')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>


                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="bathrooms">Bathrooms</label>
                                <select class="civanoglu-input" name="bathrooms" id="bathrooms">
                                    <option value="">Select Bathrooms</option>
                                    @for($x = 1; $x <= 6; $x++)
                                        <option {{old('bathrooms')==$x ? 'selected="selected"' : '' }} value="{{$x}}">{{$x}}</option>
                                    @endfor
                                    {{-- <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option> --}}
                                </select>

                                @error('bathrooms')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="net_sqm">Net square meeter <span class="required-text">*</span></label>
                                <input class="civanoglu-input" type="number" id="net_sqm" name="net_sqm" value="{{old('net_sqm')}}" required>

                                @error('net_sqm')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="gross_sqm">Gross square meeter</label>
                                <input class="civanoglu-input" type="number" id="gross_sqm" name="gross_sqm" value="{{old('gross_sqm')}}">

                                @error('gross_sqm')
                                <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="pool">Pool</label>
                                <select class="civanoglu-input" name="pool" id="pool">
                                    <option value="">Select pool</option>
                                    <option {{old('pool')=='4' ? 'selected="selected"' : '' }} value="4">No</option>
                                    <option {{old('pool')=='1' ? 'selected="selected"' : '' }} value="1">Private</option>
                                    <option {{old('pool')=='2' ? 'selected="selected"' : '' }} value="2">Public</option>
                                    <option {{old('pool')=='3' ? 'selected="selected"' : '' }} value="3">Both</option>
                                    {{-- <option value="4">No</option>
                                    <option value="1">Private</option>
                                    <option value="2">Public</option>
                                    <option value="3">Both</option> --}}
                                </select>

                                @error('pool')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex -mx-4 mb-6">
                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="overview">Overview <span class="required-text">*</span></label>
                                <textarea class="civanoglu-input" name="overview" id="overview" cols="30" rows="3" required>{{old('overview')}}</textarea>

                                @error('overview')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="overview_tr">Overview - TR <span class="required-text">*</span></label>
                                <textarea class="civanoglu-input" name="overview_tr" id="overview_tr" cols="30" rows="3" required>{{old('overview_tr')}}</textarea>

                                @error('overview_tr')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex -mx-4 mb-6">
                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="why_buy">Why buy <span class="required-text">*</span></label>
                                <textarea class="civanoglu-input" name="why_buy" id="why_buy" cols="30" rows="5" required>{{old('why_buy')}}</textarea>

                                @error('why_buy')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="why_buy_tr">Why buy - TR <span class="required-text">*</span></label>
                                <textarea class="civanoglu-input" name="why_buy_tr" id="why_buy_tr" cols="30" rows="5" required>{{old('why_buy_tr')}}</textarea>

                                @error('why_buy_tr')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex -mx-4 mb-6">
                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="description">Description <span class="required-text">*</span></label>
                                <textarea class="civanoglu-input" name="description" id="description" cols="30" rows="10" required>{{old('description')}}</textarea>

                                @error('description')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="description_tr">Description - TR <span class="required-text">*</span></label>
                                <textarea class="civanoglu-input" name="description_tr" id="description_tr" cols="30" rows="10" required>{{old('description_tr')}}</textarea>

                                @error('description_tr')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <button class="btn" type="submit">Save Property</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

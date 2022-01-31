<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="shadow-md border-2 border-gray-300 py-2 bg-white mt-28">
        <div class="container mx-auto">
            <ul class="flex items-center">
                <li><a class="text-red-800" href="{{ route('property.index') }}">{{ __('Properties') }}</a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                <li>{{$property->name}}</li>
            </ul>
        </div>
    </div>

    <!-- Title & Share -->
    <div class="bg-white py-8">
        <div class="container mx-auto">
            <div class="flex justify-between">
                <div class="w-8/12">
                    @if(request()->is('*tr*'))
                        <h2 class="text-3xl text-gray-600">{{$property->name_tr}}</h2>
                    @else
                        <h2 class="text-3xl text-gray-600">{{$property->name}}</h2>
                    @endif
                    <h3 class="text-lg mt-2">{{ __('Price') }}: <span class="text-red-800">
                        {{-- {{ number_format($property->price, 2, ',', ',') }} TK</span> --}}
                        {{-- {{ number_format($property->price) }} {{ __('Tk') }}</span> --}}
                        {{ $property->dynamic_pricing($property->price) }}
                    </h3>
                </div>
                <div class="w-3/12">
                    <ul class="flex justify-end -mr-2">
                        <li>
                            <a class="flex flex-col justify-center items-center mx-2 border-2 border-gray-200 p-3 hover:border-red-400 duration-200"
                               href="#">
                                <i class="fa fa-print mb-2"></i>
                                <span class="text-md block">Print</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex flex-col justify-center items-center mx-2 border-2 border-gray-200 p-3 hover:border-red-400 duration-200"
                               href="#">
                                <i class="fa fa-heart-o mb-2"></i>
                                <span class="text-md block">Save</span></a>
                        </li>
                        <li>
                            <a class="flex flex-col justify-center items-center mx-2 border-2 border-gray-200 p-3 hover:border-red-400 duration-200"
                               href="#">
                                <i class="fa fa-share-alt mb-2"></i>
                                <span class="text-md block">Share</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    @if (session('message'))
        <div id="notice" class="text-center bg-red-500 text-white p-3">{{ session('message') }}</div>
    @endif


    <!-- Content -->
    <div class="container mx-auto py-10">
        <div class="flex justify-between">

            {{-- Left Content --}}
            <div class="w-9/12">
                <div id="slider" class="">
                    <div class="gallery-slider">
                        @foreach($property->gallery as $gallery)
                            @if (file_exists(public_path('storage/uploads/'.$gallery->name)))
                                <div style="background-image: url('/storage/uploads/{{ $gallery->name }}')" class="single-gallery-item bg-cover bg-center"></div>
                            @else
                                <div style="background-image: url({{ $gallery->name }})" class="single-gallery-item bg-cover bg-center"></div>
                            @endif
                        @endforeach
                    </div>

                    <div class="thumbnail-slider mt-4">
                        @foreach($property->gallery as $gallery)
                            @if (file_exists(public_path('storage/uploads/'.$gallery->name)))
                                <div style="background-image: url('/storage/uploads/{{ $gallery->name }}')" class="single-thumbnail-item bg-cover bg-center"></div>
                            @else
                                <div style="background-image: url({{$gallery->name}})" class="single-thumbnail-item bg-cover bg-center"></div>
                            @endif
                        @endforeach
                    </div>
                </div>
                {{-- Overview --}}
                <div class="flex justify-between items-center bg-white p-8 mt-10 shadow-sm">
                    <h4 class="text-lg w-2/12 langBN">{{ __('Overview') }}</h4>
                    <div class="border-l-2 border-gray-300 pl-5 ml-5 w-10/12 text-base">
                        @if(request()->is('*tr*'))
                            <p>{{$property->overview_tr}}</p>
                        @else
                            <p>{{$property->overview}}</p>
                        @endif
                    </div>
                </div>

                {{-- Property Featuers --}}
                <div class="flex justify-between items-center bg-white p-8 mt-10 shadow-sm langBN">
                    <h4 class="text-lg w-2/12">{{ __('Property Features') }}</h4>
                    <div class="ml-2 w-10/12 text-base flex justify-between">
                        <div class="flex-1 border-l-2 border-gray-300 ml-3 pl-3 self-center">
                            <ul>
                                <li class="flex text-sm mb-2">
                                    <div class="flex"><i
                                            class="fa fa-home mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">{{ __('Type') }}:</span></div>
                                    <span class="ml-2 font-bold">
                                        @if($property->type == 1)
                                            {{ __('Apartment') }}
                                        @elseif($property->type == 2)
                                            {{ __('Villa') }}
                                        @else
                                            {{ __('Land') }}
                                        @endif
                                    </span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><i
                                            class="fa fa-bed mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">{{ __('Bedroom') }}:</span></div>
                                    <span class="ml-2 font-bold">{{$property->bedrooms}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1 border-l-2 border-gray-300 ml-3 pl-3 self-center">
                            <ul>
                                <li class="flex text-sm mb-2">
                                    <div class="flex"><i
                                            class="fa fa-shower mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">{{ __('Bathrooms') }}:</span></div>
                                    <span class="ml-2 font-bold">{{$property->bathrooms}}</span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><i
                                            class="fa fa-map-marker mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">{{ __('Location') }}:</span></div>
                                    <span class="ml-2 font-bold noTranslate">{{$property->location->name}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1 border-l-2 border-gray-300 ml-3 pl-3 self-center">
                            <ul>
                                <li class="flex text-sm mb-2">
                                    <div class="flex"><i
                                            class="fa fa-gratipay mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">{{ __('Living space sqm') }}:</span></div>
                                    <span class="ml-2 font-bold">{{ $property->net_sqm }}</span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><i class="fa fa-low-vision mr-2 text-red-400 w-5 text-center"></i>
                                        <span class="text-sm">{{ __('Pool') }}</span>
                                    </div>
                                    <span class="ml-2 font-bold">
                                        @if($property->pool == 1)
                                            {{ __('Private') }}
                                        @elseif($property->pool == 2)
                                            {{ __('Public') }}
                                        @elseif($property->pool == 3)
                                            {{ __('Both') }}
                                        @else
                                            {{ __('No') }}
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Overview --}}
                <div class="flex justify-between items-center bg-white p-8 mt-10 shadow-sm">
                    <h4 class="text-lg w-2/12">{{ __('Why buy this Property') }}</h4>
                    <div class="border-l-2 border-gray-300 pl-5 ml-5 w-10/12 text-base">
                        @if(request()->is('*tr*'))
                            <p>{{$property->why_buy_tr}}</p>
                        @else
                            <p>{{$property->why_buy}}</p>
                        @endif
                    </div>
                </div>

                {{-- Description --}}
                <div class="bg-white p-8 mt-10 shadow-sm" id="description">
                    <h2 class="font-bold mb-5 text-2xl"> FACILITIES &amp; LOCATION</h2>
                        @if(request()->is('*tr*'))
                            <p>{{$property->description_tr}}</p>
                        @else
                            <p>{{$property->description}}</p>
                        @endif
                </div>

            </div>{{-- Left Content End --}}



            {{-- Sidebar --}}
            <div class="w-3/12 ml-6">
                <div class="border-2 border-red-800 px-5 py-3 text-center font-light text-base">
                    <p>Subscribe to Property Turkey media for blogs/news/videos</p>
                </div>
                {{-- Form --}}
                <div class="px-4 py-5 text-left bg-gray-300 my-5">
                    <h1 class="text-2xl font-normal leading-none mb-5 langBN">{{ __('Enquire about this property') }}</h1>

                    <form action="{{ route('enquireform',$property->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="">
                            <label class="inputLabel" for="name">Name <span class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="text" id="name" name="name" placeholder="First Name"
                            value="{{ old('name') }}">

                            @error('name')
                                <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="phone">Phone <span class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="text" id="phone" name="phone" placeholder="Phone"
                            value="{{ old('phone') }}">

                            @error('phone')
                                <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="email">Email <span class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="email" id="email" name="email" placeholder="E-mail"
                            value="{{ old('email') }}">

                            @error('email')
                                <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="message">Message <span class="text-red-800 font-serif">*</span></label>
                            <textarea class="inputField" id="message" name="message" rows="4" placeholder="I'm interested in this property"></textarea>

                            @error('message')
                                <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="w-full border-2 uppercase text-center py-3 font-semibold border-red-800 hover:bg-transparent hover:text-red-800 duration-200  text-white bg-red-800 rounded-none"><i class="fa fa-commenting mr-2"></i>{{__('Request Details')}}</button>
                        </div>

                    </form>
                </div>
            </div>


        </div>

    </div>
</x-guest-layout>

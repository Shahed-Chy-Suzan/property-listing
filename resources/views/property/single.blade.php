<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="shadow-md border-2 border-gray-300 py-2 bg-white mt-28">
        <div class="container mx-auto">
            <ul class="flex items-center">
                <li><a class="text-base text-red-800" href="#">Property</a></li>
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
                    <h2 class="text-3xl text-gray-600">{{$property->name}}</h2>
                    <h3 class="text-lg mt-2">Price: <span class="text-red-800">
                        {{-- {{ number_format($property->price, 2, ',', ',') }} TK</span> --}}
                        {{ number_format($property->price) }} TK</span>
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

    <!-- Content -->
    <div class="container mx-auto py-10">
        <div class="flex justify-between">

            {{-- Left Content --}}
            <div class="w-9/12">
                <div id="slider" class="">
                    <div class="gallery-slider">
                        @foreach($property->gallery as $gallery)
                            <div style="background-image: url({{$gallery->name}})" class="single-gallery-item bg-cover bg-center"></div>
                        @endforeach
                    </div>

                    <div class="thumbnail-slider mt-4">
                        @foreach($property->gallery as $gallery)
                            <div style="background-image: url({{$gallery->name}})" class="single-thumbnail-item bg-cover bg-center"></div>
                        @endforeach
                    </div>
                </div>
                {{-- Overview --}}
                <div class="flex justify-between items-center bg-white p-8 mt-10 shadow-sm">
                    <h4 class="text-lg w-2/12">Overview</h4>
                    <div class="border-l-2 border-gray-300 pl-5 ml-5 w-10/12 text-base">
                        <p>{{$property->overview}}</p>
                    </div>
                </div>

                {{-- Property Featuers --}}
                <div class="flex justify-between items-center bg-white p-8 mt-10 shadow-sm">
                    <h4 class="text-lg w-2/12">Property Features</h4>
                    <div class="ml-2 w-10/12 text-base flex justify-between">
                        <div class="flex-1 border-l-2 border-gray-300 ml-3 pl-3 self-center">
                            <ul>
                                <li class="flex text-sm mb-2">
                                    <div class="flex"><i
                                            class="fa fa-home mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Type:</span></div>
                                    <span class="ml-2 font-bold">
                                        @if($property->type == 1)
                                            Apartment
                                        @elseif($property->type == 2)
                                            Villa
                                        @else
                                            Land
                                        @endif
                                    </span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><i
                                            class="fa fa-bed mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Bedrooms:</span></div>
                                    <span class="ml-2 font-bold">{{$property->bedrooms}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1 border-l-2 border-gray-300 ml-3 pl-3 self-center">
                            <ul>
                                <li class="flex text-sm mb-2">
                                    <div class="flex"><i
                                            class="fa fa-shower mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Bathrooms:</span></div>
                                    <span class="ml-2 font-bold">{{$property->bathrooms}}</span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><i
                                            class="fa fa-map-marker mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Location:</span></div>
                                    <span class="ml-2 font-bold">{{$property->location->name}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1 border-l-2 border-gray-300 ml-3 pl-3 self-center">
                            <ul>
                                <li class="flex text-sm mb-2">
                                    <div class="flex"><i
                                            class="fa fa-gratipay mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Living space sqm:</span></div>
                                    <span class="ml-2 font-bold">{{ $property->net_sqm }}</span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><i
                                            class="fa fa-low-vision mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Pool</span></div>
                                    <span class="ml-2 font-bold">
                                        @if($property->pool == 1)
                                            Private
                                        @elseif($property->pool == 2)
                                            Public
                                        @elseif($property->pool == 3)
                                            Both
                                        @else
                                            No
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Overview --}}
                <div class="flex justify-between items-center bg-white p-8 mt-10 shadow-sm">
                    <h4 class="text-lg w-2/12">Why buy this Property</h4>
                    <div class="border-l-2 border-gray-300 pl-5 ml-5 w-10/12 text-base">
                        {{$property->why_buy}}
                    </div>
                </div>

                {{-- Description --}}
                <div class="bg-white p-8 mt-10 shadow-sm" id="description">

                    <h2 class="font-bold mb-5 text-2xl"> FACILITIES &amp; LOCATION</h2>

                    {{$property->description}}

                </div>

            </div>{{-- Left Content End --}}



            {{-- Sidebar --}}
            <div class="w-3/12 ml-6">
                <div class="border-2 border-red-800 px-5 py-3 text-center font-light text-base">
                    <p>Subscribe to Property Turkey media for blogs/news/videos</p>
                </div>
                {{-- Form --}}
                <div class="px-4 py-5 text-left bg-gray-300 my-5">
                    <h1 class="text-2xl font-normal leading-none mb-5">Enquire about this property</h1>

                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="">
                            <label class="inputLabel" for="name">Name <span class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="text" id="name" name="name" placeholder="First Name">
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="phone">Phone <span class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="text" id="phone" name="phone" placeholder="Phone">
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="email">Email <span class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="email" id="email" name="email" placeholder="E-mail">
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="message">Message <span class="text-red-800 font-serif">*</span></label>
                            <textarea class="inputField" id="message" name="message" rows="4" placeholder="I'm interested in this property"></textarea>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="w-full border-2 uppercase text-center py-3 font-semibold border-red-800 hover:bg-transparent hover:text-red-800 duration-200  text-white bg-red-800 rounded-none"><i class="fa fa-commenting mr-2"></i>Request Details</button>
                        </div>

                    </form>
                </div>
            </div>


        </div>

    </div>
</x-guest-layout>

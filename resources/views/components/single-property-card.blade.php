<div class="{{$width}} px-2  relative rounded-md mb-6">
    <div class="shadow-lg">
        <a href=""
           class="absolute left-3 w-9 h-9 leading-10 self-center text-base top-3 bg-black text-white bg-opacity-25 text-center hover:bg-yellow-500 hover:text-white duration-200 rounded-full"><i
                class="fa fa-heart-o"></i></a>
        <div class="py-20 bg-center" style="background-image: url({{$property->featured_image}})"></div>
        <div class="p-3">
            <h2 class="leading-0 text-base">{{$property->name}}</h2>
            <h3 class="text-2xl py-3">{{ number_format($property->price) }} TK</h3>
            <div class="border-t-2">
                <ul class="flex items-center -mx-1 my-4">
                    <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->bedrooms}} bedrooms</li>
                    <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->bathrooms}} bathrooms</li>
                    <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">{{$property->gross_sqm}} M<sup>2</sup></li>
                </ul>
                <a href="{{route('single-property', $property->id)}}" class="btn w-full text-center">More details</a>
            </div>
        </div>
    </div>
</div>

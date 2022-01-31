<div class="{{$width}} px-2  relative rounded-md mb-6">
    <div class="shadow-lg">
        <a href="" class="absolute left-3 w-9 h-9 leading-10 self-center text-base top-3 bg-black text-white bg-opacity-25 text-center hover:bg-yellow-500 hover:text-white duration-200 rounded-full"><i class="fa fa-heart-o"></i></a>

        {{-- @if ( File::exists(storage_path('app/public/uploads/') . $property->featured_image) ) --}}
        @if (file_exists(public_path('storage/uploads/' . $property->featured_image)))
            <div class="py-20 flex-1 bg-center" style="background-image: url('/storage/uploads/{{ $property->featured_image }}')"></div>
        @else
            <div class="py-20 flex-1 bg-center" style="background-image: url('{{ $property->featured_image }}')"></div>
        @endif

        <div class="p-3">
            @if(request()->is('*tr*'))
                <h2 class="leading-0 text-base">{{$property->name_tr}}</h2>
            @else
                <h2 class="leading-0 text-base">{{$property->name}}</h2>
            @endif
            {{-- <h3 class="text-2xl py-3">{{ number_format($property->price) }} {{ __('TK') }}</h3> --}}
            <h3 class="text-2xl py-3">{{ $property->dynamic_pricing($property->price) }}</h3>
            <div class="border-t-2">
                <ul class="flex items-center -mx-1 my-4">
                    <li class="px-2 py-1 bg-gray-200 rounded-md text-xs mx-1 shadow-sm">{{$property->bedrooms}} {{ __('Bedrooms') }}</li>
                    <li class="px-2 py-1 bg-gray-200 rounded-md text-xs mx-1 shadow-sm">{{$property->bathrooms}} {{ __('Bathrooms') }}</li>
                    <li class="px-2 py-1 bg-gray-200 rounded-md text-xs mx-1 shadow-sm">{{$property->gross_sqm}} {{ __('ft') }}<sup>2</sup></li>
                </ul>
                <a href="{{route('property.show', $property->id)}}" class="btn w-full text-center">{{ __('More details') }}</a>
            </div>
        </div>
    </div>
</div>

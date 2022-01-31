<x-guest-layout>
    <div class="relative z-10 pt-48 pb-52 bg-cover bg-center" style="background-image: url(/img/6.jpg)">
        <div class="absolute h-full w-full bg-black opacity-70 top-0 left-0 z-10"></div>
        <div class="container relative z-20 text-white text-center text-2xl">
            <h2 class="font-bold text-5xl mb-8 langBN">{{__('Guide Property - your guide to the primary real estate market in dubai.')}}</h2>
            <p class="text-2xl mt-8 langBN">{{ __('The most convenient real estate search portal in Dubai, start searching now!') }}</p>
        </div>
    </div>

    <!-- Search From Area -->
    <div class="-mt-10">
        <div class="container">
            <div class="rounded-lg bg-white p-4 relative z-20 shadow-lg home-search">
                @include('components.property-search-form', ['locations' => $locations])
            </div>
        </div>
    </div>

    <div class="py-20 text-center">
        <div class="container">
            <h2 class="section-heading">Lorem ipsum dolor sit amet, consectetur<br/> adipisicing elit. A aut autem dolorum <span class="underline">quis vitae!</span></h2>
            <p class="text-gray-500 text-2xl font-bold mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, voluptatem!</p>

            <a class="border-2 border-gray-700 rounded-2xl text-xl px-8 py-3 inline-block" href="">Start The Searching</a>

            <h2 class="section-heading pt-14">Lorem ipsum dolor sit amet adipisicing<br/> adipisicing elit. A aut lorum </h2>

            <div class="w-4/5 mx-auto">
                <div class="flex -mx-3 flex-wrap justify-between mt-10">
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                    <div class="w-3/12  mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Huge selection of real estate</h3>
                        <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container text-center pt-14">
        <h2 class="section-heading">{{ __('More information about us') }}</h2>
        <div class="relative mt-10 mb-14 bg-cover rounded-xl py-24 bg-center"
             style="background-image: url(/img/6.jpg)">
            <div class="absolute w-full h-full rounded-xl opacity-50 bg-black left-0 top-0"></div>
            <div class="relative z-20">
                <a href="" class="text-white text-xl flex flex-col justify-center items-center"><span class="border-2 border-white w-12 h-12 text-center pt-1 pl-1 leading-10 text-2xl hover:border-yellow-500 duration-200 rounded-full mb-2"><i class="fa fa-play"></i></span>{{ __('Watch the video') }}</a>
            </div>
        </div>

        <div class="text-xl">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto autem corporis debitis
                dignissimos doloremque eius error explicabo impedit iste libero magnam, natus officiis omnis quasi
                ratione sequi totam, vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto
                autem corporis debitis
                dignissimos doloremque eius error explicabo impedit iste libero magnam, natus officiis omnis quasi
                ratione sequi totam, vero.</p>

        </div>
    </div>


    <div class="container pt-14">
        <div class="flex justify-between ">
            <div class="flex-1 mr-10 text-lg leading-normal">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores deleniti ipsam iure laborum nemo
                    non odit quis quod, sint tempore. Ab culpa cupiditate error, eum incidunt officiis rem sapiente
                    voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores deleniti ipsam iure
                    laborum nemo non odit quis quod, sint tempore. Ab culpa cupiditate error, eum incidunt officiis rem
                    sapiente voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores deleniti
                    ipsam iure laborum nemo non odit quis quod, sint tempore. Ab culpa cupiditate error, eum incidunt
                    officiis rem sapiente voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    deleniti ipsam iure laborum nemo non odit quis quod, sint tempore. Ab culpa cupiditate error, eum
                    incidunt officiis rem sapiente voluptate</p>
            </div>
            <div class="flex-1 ml-10">
                <img class="rounded" src="/img/3.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="container pt-14">
        <div class="flex justify-center items-center">
            <a href="" class="btn">Start searching with filters</a>
            <p class="mx-10">or</p>
            <a href="" class="btn-outline">Start searching on the map</a>
        </div>
    </div>

    <!-- Last Added Objects -->
    <div class="container py-14">
        <h2 class="section-heading">{{ __('Last added properties') }}</h2>
        <div class="flex flex-wrap -mx-2 mt-10">

            @foreach($latest_properties as $property)
                @include('components.single-property-card', ['property' => $property, 'width' => 'w-1/4'])
            @endforeach


        </div>
    </div>

</x-guest-layout>

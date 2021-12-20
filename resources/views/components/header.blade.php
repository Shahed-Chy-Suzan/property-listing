
<div class="fixed top-0 w-full py-4 px-12 flex justify-between items-center z-30 sticky-header {{request()->routeIs('home') ? '' : 'general-header'}}">
    <div class="min-w-max">
        <a href="{{route('home')}}"><img width="100" src="/img/house-logo.png" alt=""></a>
    </div>

    <div class="w-full">
        <ul class="flex justify-center">
            <li><a class="inline-block p-4 text-white" href="{{route('properties')}}?type=0">Land</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('properties')}}?type=2">Villa</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('properties')}}?type=1">Apartment</a></li>
            <li><a class="inline-block p-4 text-white" href="">About Us</a></li>
            <li><a class="inline-block p-4 text-white" href="">Contact Us</a></li>
        </ul>
    </div>

    <div class="min-w-max text-3xl">
        <a href="">🏁</a>
        <a href="">🚩</a>
        {{-- &#127482;&#127480; --}}
    </div>
</div>

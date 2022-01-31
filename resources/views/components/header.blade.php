
<div class="fixed top-0 w-full py-4 px-12 flex justify-between items-center z-30 sticky-header {{request()->routeIs('home') ? '' : 'general-header'}}">
    <div class="min-w-max">
        <a href="{{route('home')}}"><img width="100" src="/img/house-logo.png" alt=""></a>
    </div>

    <div class="w-full">
        <ul class="flex justify-center">
            <li><a class="inline-block p-4 text-white {{request('type') == '3' ? 'bg-gray-50' : ''}}" href="{{route('property.index')}}?type=3">{{ __('Land') }}</a></li>
            <li><a class="inline-block p-4 text-white {{request('type') == '2' ? 'bg-gray-50' : ''}}" href="{{route('property.index')}}?type=2">{{ __('Villa') }}</a></li>
            <li><a class="inline-block p-4 text-white {{request('type') == '1' ? 'bg-gray-50' : ''}}" href="{{route('property.index')}}?type=1">{{ __('Apartment') }}</a></li>
            <li><a class="inline-block p-4 text-white {{ request()->is('*page/about-us*') ? 'bg-gray-50' : '' }}" href="{{route('page', 'about-us')}}">{{ __('About Us') }}</a></li>
            <li><a class="inline-block p-4 text-white  {{ request()->is('page/contact-us') ? 'bg-gray-50' : '' }}" href="{{route('page', 'contact-us')}}">{{ __('Contact Us') }}</a></li>

            {{-- <li><a class="menu-item {{ request()->is('*/properties/?type=land') ? 'active' : '' }}" href="{{ route('properties') }}/?type=land">{{ __('Land') }}</a></li>
            <li><a class="menu-item {{ request()->is('*/properties/?type=villa') ? 'active' : '' }}" href="{{ route('properties') }}/?type=villa">{{ __('Villa') }}</a></li>
            <li><a class="menu-item {{ request()->is('*/properties/?type=apartment') ? 'active' : '' }}" href="{{ route('properties') }}/?type=apartment">{{ __('Apartment') }}</a></li>
            <li><a class="menu-item {{ request()->is('*/page/about-us*') ? 'active' : '' }}" href="{{ route('page','about-us') }}">{{ __('About Us') }}</a></li>
            <li><a class="menu-item {{ request()->is('*/page/contact-us*') ? 'active' : '' }}" href="{{ route('page','contact-us') }}">{{ __('Contact Us') }}</a></li> --}}

        </ul>
    </div>


    <div class="min-w-max text-3xl flex justify-end">
        <!------ Currency Change Button ------->
        <div class="mr-10 text-2xl currency">
            <a class="inline-block text-xl rounded-full px-3 py-1 text-white" href="{{ route('currency', 'usd') }}" title="Change Currency to Doller">$</a>
            <a class="inline-block text-xl rounded-full px-3 py-1 text-white" href="{{ route('currency', 'tl') }}" title="Change Currency to Lira">₺</a>
            <a class="inline-block text-xl rounded-full px-3 py-1 text-white" href="{{ route('currency', 'bdt') }}" title="Change Currency to Taka">৳</a>
        </div>

        <!------ Language Change Button - Flag ------->
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" title="English Language">🏁</a>
        <a href="{{ LaravelLocalization::getLocalizedURL('bn') }}" title="Bangla Language" class="px-3">
            {{-- 🚩 --}}
            <svg style="display: inline-block" xmlns="http://www.w3.org/2000/svg" width="28pt"
            height="18pt" viewBox="0 0 16 10">
                <g id="surface1">
                    <rect x="0" y="0" width="16" height="10" style="
                        fill: rgb(0%, 41.568627%, 30.588235%);
                        fill-opacity: 1;
                        stroke: none;
                        " />
                    <path style="
                        stroke: none;
                        fill-rule: nonzero;
                        fill: rgb(
                            95.686275%,
                            16.470588%,
                            25.490196%
                        );
                        fill-opacity: 1;
                        "
                    d="M 10.398438 5 C 10.398438 6.839844 8.96875 8.332031 7.199219 8.332031 C 5.433594 8.332031 4 6.839844 4 5 C 4 3.160156 5.433594 1.667969 7.199219 1.667969 C 8.96875 1.667969 10.398438 3.160156 10.398438 5 Z M 10.398438 5 " />
                </g>
            </svg>
        </a>
        <a href="{{ LaravelLocalization::getLocalizedURL('tr') }}" title="Turkish Language"><!--🏳️--> 🚩</a>
        {{-- &#127482;&#127480; --}}
    </div>

</div>

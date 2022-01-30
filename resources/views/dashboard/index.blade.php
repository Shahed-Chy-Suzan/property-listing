<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-bold text-2xl px-3 mb-6 bg-gradient-to-r inline-block from-purple-500 to-blue-500 bg-clip-text text-transparent">Website Summery</h2>
                    <div class="grid grid-cols-3 gap-5">

                        <a href="{{ route('properties.index') }}" class="dashboard-card">
                            <i class="fa fa-map-signs"></i>
                            <h2 class="font-bold text-xl uppercase">Properties</h2>
                            <span> {{ $counter['properties'] }}</span>
                        </a>
                        <a href="{{ route('location.index') }}" class="dashboard-card">
                            <i class="fa fa-location-arrow"></i>
                            <h2 class="font-bold text-xl uppercase">Locations</h2>
                            <span> {{ $counter['location'] }}</span>
                        </a>
                        <a href="{{ route('pages.index') }}" class="dashboard-card">
                            <i class="fa fa-file-archive-o"></i>
                            <h2 class="font-bold text-xl uppercase">Pages</h2>
                            <span> {{ $counter['page'] }}</span>
                        </a>

                        <a href="{{ route('user.index') }}" class="dashboard-card">
                            <i class="fa fa-users"></i>
                            <h2 class="font-bold text-xl uppercase">Users</h2>
                            <span> {{ $counter['user'] }}</span>
                        </a>

                        <a href="{{ route('message.index') }}" class="dashboard-card">
                            <i class="fa fa-comments"></i>
                            <h2 class="font-bold text-xl uppercase">Messages</h2>
                            <span> {{ $counter['message'] }}</span>
                        </a>
                        <a href="#" class="dashboard-card">
                            <i class="fa fa-cogs"></i>
                            <h2 class="font-bold text-xl uppercase">Setting</h2>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

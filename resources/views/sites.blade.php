@extends('layout')

@section('content')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @if(count($sites) == 0)
    <p>No listings found</p>
    @endif

    @foreach($sites as $site)
    <div class="bg-gray-50 border border-gray-200 rounded p-6">
        <div class="flex">
            <img class="hidden w-48 mr-6 md:block object-scale-down" src="{{asset('images/no-image.jpg')}}" alt="" />
            <div>
                <h3 class="text-2xl">
                    <a href="show.html">{{$site->title}}</a>
                </h3>
                <div class="text-xl font-bold mb-4">{{$site->state}}</div>
                <ul class="flex">
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <a href="#">a tag</a>
                    </li>
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <a href="#">another tag</a>
                    </li>
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <a href="#"> yet another tag</a>
                    </li>
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <a href="#">one last tag</a>
                    </li>
                </ul>
                <div class="text-lg mt-4">
                    <i class="fa-solid fa-location-dot"></i> {{$site->area}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection

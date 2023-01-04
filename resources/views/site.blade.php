@extends('layout')

@section('content')
@include('partials._search')
<a href="index.html" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-80 mr-6 mb-6"
                            src="{{asset('images/no-image.jpg')}}"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">{{$site->title}}</h3>
                        <div class="text-xl font-bold mb-4">{{$site->state}}</div>
                        <ul class="flex">
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">tag</a>
                            </li>
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">tag</a>
                            </li>
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">tag</a>
                            </li>
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">tag</a>
                            </li>
                        </ul>
                        <div class="text-lg my-4">
                            <i class="fa-solid fa-location-dot"></i> {{$site->area}}
                        </div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                Description
                            </h3>
                            <div class="text-lg space-y-6">
                                <p>
                                    {{$site->description}}
                                </p>
                                <h4 class="text-3xl font-bold mb-4">
                                    Directions
                                </h4>
                                <p>
                                    {{$site->directions}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

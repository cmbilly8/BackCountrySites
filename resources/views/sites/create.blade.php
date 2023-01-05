@extends('layout')
@section('content')
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Post a site
            </h2>
            <p class="mb-4">Help others find their next temporary home</p>
        </header>

        <form method="POST" action="/sites">
            @csrf
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2" >
                    Title
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" value="{{old('title')}}"/>
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="area" class="inline-block text-lg mb-2" >
                    Area
                </label >
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="area"  placeholder="Example: Great Smoky Mountains NP" value="{{old('area')}}"/>
                @error('area')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="state" class="inline-block text-lg mb-2">
                    State
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="state"  placeholder="Example: NC" value="{{old('state')}}"/>
                @error('state')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="directions" class="inline-block text-lg mb-2">
                    Directions To Site
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="directions" placeholder="Example: 12 miles down from Big Spruce trailhead." value="{{old('directions')}}"/>
                @error('directions')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Separated by Commas)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" placeholder="Example: nearby water, great view, shaded, etc..." value="{{old('tags')}}"/>
            </div>

            {{-- <div class="mb-6">
                <label for="pic" class="inline-block text-lg mb-2">
                    Picture of Site
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="pic" />
            </div> --}}

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="Tell us about it!" >{{old('description')}}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Post Site
                </button>

                <a href="/" class="text-black ml-4"> Back </a>

            </div>
        </form>
    </x-card>
@endsection

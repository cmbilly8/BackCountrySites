@extends('layout')
@section('content')
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Post a site
            </h2>
            <p class="mb-4">Help others find their next temporary home</p>
        </header>

        <form action="">
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2" >
                    Title
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" />
            </div>

            <div class="mb-6">
                <label for="area" class="inline-block text-lg mb-2" >
                    Area
                </label >
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="area"  placeholder="Example: Great Smoky Mountains NP" />
            </div>

            <div class="mb-6">
                <label for="state" class="inline-block text-lg mb-2">
                    State
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="state"  placeholder="Example: NC" />
            </div>

            <div class="mb-6">
                <label for="directions" class="inline-block text-lg mb-2">
                    Directions To Site
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="directions" placeholder="Example: 12 miles down from Big Spruce trailhead." />
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" placeholder="Example: nearby water, great view, shaded" />
            </div>

            <div class="mb-6">
                <label for="pic" class="inline-block text-lg mb-2">
                    Picture of Site
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="pic" />
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Job Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="Tell us about it!"></textarea>
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

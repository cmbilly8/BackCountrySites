@props(['site'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block object-scale-down" src="{{asset('images/no-image.jpg')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/sites/{{$site->id}}">{{$site->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$site->state}}</div>
            <x-site-tags :tagsCSV="$site->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$site->area}}
            </div>
        </div>
    </div>
</x-card>

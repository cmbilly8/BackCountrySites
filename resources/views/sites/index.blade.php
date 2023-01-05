@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @if(count($sites) == 0)
    <p>No sites found</p>
    @endif

    @foreach($sites as $site)
        <x-site-card :site="$site" />
    @endforeach
</div>

@endsection

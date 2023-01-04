@extends('layout')

@section('content')
@include('partials._search')
<h2>
    {{$site['title']}}
</h2>
<p>
    {{$site['description']}}
</p>
<p>
    Location: {{$site['state']}}
</p>
<p>
    Directions: {{$site['directions']}}
</p>
@endsection

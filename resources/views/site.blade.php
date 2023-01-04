@extends('layout')

@section('content')
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

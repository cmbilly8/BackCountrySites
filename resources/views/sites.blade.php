<h1>{{$heading}}</h1>

@if(count($sites) == 0)
<p>No listings found</p>
@endif

@foreach($sites as $site)
    <h2>
        <a href="/sites/{{$site['id']}}">{{$site['title']}}</a>
    </h2>
    <p>
        {{$site['location']}}
    </p>
@endforeach

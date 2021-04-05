@extends('test.parent');
@section('content')
{{$message ?? ''}}
<h1>List of Countries.</h1>
<div class="text-danger">{{ $message ?? ""}}</div>    
<ul>
    @foreach ($countries as $country)

    
        <li class="pt-2">{{$country->country_name}}
            <a href={{url('/editedCountry', $country->id)}} class="btn btn-warning">Edit</a>
            <a href={{url('/deleteCountry', $country->id)}} class="btn btn-warning">Delete</a>
        </li>
            
    @endforeach
   
</ul>
<div class="pagination">
   {{$countries->links()}}  
</div>

@endsection
@extends('test.parent');
@section('content')
<div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
{{$message ?? ''}}
<th><h1 class='text-center'>List of Countries.</h1></th>
<div class="text-danger">{{ $message ?? ""}}</div>  
<ul>
    <table>
    @foreach ($countries as $country)
    
    
<li>

<tr> {{$country->country_name}}
 <th><button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                <a href={{url('/editedCountry', $country->id)}} class="btn btn-warning">Edit</a></button>
        <button class="bg-white hover:bg-red-300 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"><a href={{url('/deleteCountry', $country->id)}} class="btn btn-warning">Delete</a></button></th>
 </tr>
        </li>
    @endforeach
   
   
</ul>
<div class="pagination">
   {{$countries->links()}}  
</div>
</div>

@endsection
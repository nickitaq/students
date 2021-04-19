@extends('test.parent');

   
@section('content')
<div class="bg-white px-6 py-8 rounded shadow-md text-black w-full border border-green-600 border-double mt-5">
      <div class="text-success">
          
        {{$message ?? ''}}
            </div>
            Edit Country 
            <form action="{{url('updateCountry', $country->id)}}" method="POST">
                @method('PUT')
                @csrf        
                <label for="country">Country name </label> 
                
                <input 
                type="text"
                class="block border border-green w-full p-3 rounded mb-4"
                name="country_name"
                value='{{$country->country_name}}'
                placeholder="Country Name" />
                <button type='submit' class="w-full text-center py-3 rounded bg-yellow-600 text-white hover:bg-green-dark focus:outline-none my-1">Update</button>
                
                <a href={{url('displayCountry')}} class="btn btn-warning">Go back to the countries</a>

            </form>
        </div>
@endsection
        
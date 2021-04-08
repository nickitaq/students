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
                <input type="text" name='country_name' value='{{$country->country_name}}'>
                <button type='submit'>
                   Update
                </button> 
                <a href={{url('displayCountry')}} class="btn btn-warning">Go back to the countries</a>

            </form>
        </div>
@endsection
        
@extends('test.parent');
@section('content')
 
    <form action="{{url('insertCountry')}}" method="POST" class='mx-10 my-10'>
        @csrf        
        <label for="country">Country name        </label> 
        <input type="text" name='country_name' class='border border-black-700'>
        <button type='submit' class="bg-gray-500 border-solid">
            save
        </button> 
    </form>
    
@endsection
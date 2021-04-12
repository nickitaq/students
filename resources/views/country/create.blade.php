@extends('test.parent')
@section('content')
<div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-grey-light px-6 py-8 rounded shadow-md text-black w-full">
        
        <form action="{{url('insertCountry')}}" method="POST" class='mx-10 my-10'>
            @csrf        
           <div> <label for="country">Country name    </label></div>         
            <input 
                type="text"
                class="block border border-green w-full p-3 rounded mb-4"
                name="country_name"
                placeholder="country Name" />
            <button type='submit' class="w-full text-center py-3 rounded bg-green-600 text-white hover:bg-green-dark focus:outline-none my-1">
                save
            </button> 
        </form>
    </div>
    </div>
    
@endsection
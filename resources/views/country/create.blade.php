@extends('test.parent')
@section('content')
    <div class="bg-grey-light px-6 py-8 rounded shadow-md text-black w-full">
        <form action="{{url('insertCountry')}}" method="POST" class='mx-10 my-10'>
            @csrf        
            <label for="country">Country name    </label>         
            <input 
                type="text"
                class="block border border-green w-full p-3 rounded mb-4"
                name="country_name"
                placeholder="FIRST NAME" />
            <button type='submit' class="w-full text-center py-3 rounded bg-green-600 text-white hover:bg-green-dark focus:outline-none my-1">
                save
            </button> 
        </form>
    </div>
    
@endsection
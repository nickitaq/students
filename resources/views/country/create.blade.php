@extends('test.parent');
@section('content')
    <div class="text-success">
{{$message ?? ''}}
    </div>
    <form action="{{url('insertCountry')}}" method="POST">
        @csrf        
        <label for="country">Country name        </label> 
        <input type="text" name='country_name'>
        <button type='submit'>
            save
        </button> 
    </form>
    
@endsection
@extends('test.parent');
@section('content')

<form action="{{url('insertCountry')}}" method="POST" class='mx-10 my-10'>
    @csrf        
    <label for="country">Course name        </label> 
    <input type="text" name='course_name' class='border border-black-700'>
    <button type='submit' class="bg-gray-500 border-solid">
        save
    </button> 
</form>
@section